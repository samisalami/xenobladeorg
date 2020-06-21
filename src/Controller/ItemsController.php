<?php
namespace App\Controller;
use App\Entity\XenobladeArms;
use App\Entity\XenobladeBodies;
use App\Entity\XenobladeChestitemsR;
use App\Entity\XenobladeCollections;
use App\Entity\XenobladeEquipSockettypeR;
use App\Entity\XenobladeFeet;
use App\Entity\XenobladeHeads;
use App\Entity\XenobladeItemmerchantR;
use App\Entity\XenobladeItemMissionR;
use App\Entity\XenobladeItemmonsterR;
use App\Entity\XenobladeItemtradeinventoryR;
use App\Entity\XenobladeLegs;
use App\Entity\XenobladeSockettype;
use App\Entity\XenobladeCollectioncollectionfieldtypesR;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ItemsController extends AbstractController
{
    public function equip() {
        $equipData = [];
        $equipData['Torso'] = $this->getEquipDataArray(XenobladeBodies::class);
        $equipData['Arme'] = $this->getEquipDataArray(XenobladeArms::class);
        $equipData['Beine'] = $this->getEquipDataArray(XenobladeLegs::class);
        $equipData['Kopf'] = $this->getEquipDataArray(XenobladeHeads::class);
        $equipData['Füße'] = $this->getEquipDataArray(XenobladeFeet::class);

        return $this->render('/items/equip.html.twig', [
            'equipData' => $equipData
        ]);
    }

    public function chestLootList(array $chestItemRelations) {
        /** @var $chestItemRelations XenobladeChestitemsR[] */

        $items = [];

        foreach ($chestItemRelations as $relation) {
            if (!array_key_exists($relation->getItem()->getItemcategory()->getName(), $items)) {
                $items[$relation->getItem()->getItemcategory()->getName()] = [];
            }

            array_push($items[$relation->getItem()->getItemcategory()->getName()], $relation);
        }

        return $this->render('items/_loot_list.html.twig', [
            'items' => $items
        ]);
    }

    public function missionLootList(array $missionItemRelations) {
        /** @var $missionItemRelations XenobladeItemMissionR[] */

        $items = [];

        foreach ($missionItemRelations as $relation) {
            if (!$relation->getItem()) {
                $itemData = $relation->getEquipSockettypeR();
            } else {
                // work around messed up db schema
                $itemData = new XenobladeEquipSockettypeR();
                $itemData->setItem($relation->getItem());
            }
            if (!array_key_exists($itemData->getItem()->getItemcategory()->getName(), $items)) {
                $items[$itemData->getItem()->getItemcategory()->getName()] = [];
            }

            array_push($items[$itemData->getItem()->getItemcategory()->getName()], $itemData);
        }

        return $this->render('items/_loot_list.html.twig', [
            'items' => $items
        ]);
    }

    private function getEquipDataArray($class)
    {
        $itemData = [];
        $items = $this->getDoctrine()->getRepository($class)->findBy([], [
            'weighttype' => 'ASC',
            'weight' => 'ASC',
            'pha' => 'ASC',
            'aeta' => 'ASC'
        ]);

        foreach ($items as $item) {
            array_push($itemData, [
                'item' => $item,
                'socket' =>  $this->getSocketTypeByItem($item),
                'finds' =>  $this->getEquipFinds($item)
            ]);
        }

        return $itemData;
    }

    private function getEquipFinds($item) {
        $equipSocketTypeRelations = $this->getDoctrine()->getRepository(XenobladeEquipSockettypeR::class)->findBy([
           'item' => $item
        ]);

        $missionRelations = [];
        $merchantRelations = [];
        $tradeRelations = [];
        foreach ($equipSocketTypeRelations as $r) {
            $missionRelations = array_merge(
                $missionRelations,
                $this->getDoctrine()->getRepository(XenobladeItemMissionR::class)->findBy([
                    'equipSockettypeR' => $r
                ])
            );
            $merchantRelations = array_merge(
                $merchantRelations,
                $this->getDoctrine()->getRepository(XenobladeItemmerchantR::class)->findBy([
                    'equipSockettypeR' => $r
                ])
            );
            $tradeRelations = array_merge(
                $tradeRelations,
                $this->getDoctrine()->getRepository(XenobladeItemtradeinventoryR::class)->findBy([
                    'equipSockettypeR' => $r
                ])
            );
        }

        $chestRelations = $this->getDoctrine()->getRepository(XenobladeChestitemsR::class)->findBy([
            'item' => $item
        ]);
        $collections = $this->getDoctrine()->getRepository(XenobladeCollections::class)->findBy([
            'rewardItem' => $item
        ]);
        $collectionRows = $this->getDoctrine()->getRepository(XenobladeCollectioncollectionfieldtypesR::class)->findBy([
            'item' => $item
        ]);
        $monsterRelations = $this->getDoctrine()->getRepository(XenobladeItemmonsterR::class)->findBy([
            'item' => $item
        ]);

        return [
          'missions' => array_map(function($missionR) { return $missionR->getMission(); }, $missionRelations),
          'trades' => array_map(function($tradeR) { return ['person' => $tradeR->getTradeInventory()->getPerson(), 'reqHarmony' => $tradeR->getReqharmony()]; }, $tradeRelations),
          'merchants' => array_map(function($merchantR) { return $merchantR->getMerchant(); }, $merchantRelations),
          'chests' => array_map(function($chestR) { return $chestR->getChest(); }, $chestRelations),
          'monsters' => array_map(function($monsterR) { return $monsterR->getMonster(); }, $monsterRelations),
          'collections' => array_map(function($collection) {
                 if ($collection instanceof XenobladeCollections) {
                     return $collection;
                 } else {
                     return $collection->getCollection();
                 }
              }, array_merge($collections, $collectionRows)
          )
        ];
    }

    private function getSocketTypeByItem($item): ?XenobladeSockettype {
        /** @var XenobladeEquipSockettypeR[] $socketRelation */
        $socket = null;
        $socketRelation = $this->getDoctrine()->getRepository(XenobladeEquipSockettypeR::class)->findBy([
            'item' => $item
        ]);

        if (count($socketRelation) > 0) {
            $socket = $socketRelation[0]->getSockettype();
        }
        return $socket;
    }
}