<?php
namespace App\Controller;
use App\Entity\XenobladeArms;
use App\Entity\XenobladeBodies;
use App\Entity\XenobladeCharacters;
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
use App\Entity\XenobladeWeapons;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ItemsController extends AbstractController
{
    public function gear() {
        $orderBy = [
            'weighttype' => 'ASC',
            'weight' => 'ASC',
            'pha' => 'ASC',
            'aeta' => 'ASC'
        ];
        $gearData = [];
        $gearData['Torso'] = $this->getEquipDataArray(XenobladeBodies::class, [], $orderBy);
        $gearData['Arme'] = $this->getEquipDataArray(XenobladeArms::class, [], $orderBy);
        $gearData['Beine'] = $this->getEquipDataArray(XenobladeLegs::class, [], $orderBy);
        $gearData['Kopf'] = $this->getEquipDataArray(XenobladeHeads::class, [], $orderBy);
        $gearData['Füße'] = $this->getEquipDataArray(XenobladeFeet::class, [], $orderBy);

        return $this->render('/items/gear.html.twig', [
            'gearData' => $gearData
        ]);
    }

    public function weapons() {
        $weaponData = [];
        $characters = $this->getDoctrine()->getRepository(XenobladeCharacters::class)->findBy([], [
            'prio' => 'ASC'
        ]);

        foreach ($characters as $character) {
            array_push($weaponData, [
                'character' => $character,
                'weapons' => $this->getEquipDataArray(XenobladeWeapons::class, [
                    'character' => $character
                ], [
                    'autoangriffMin' => 'ASC'
                ])
            ]);
        }

        return $this->render('/items/weapons.html.twig', [
            'weaponData' => $weaponData
        ]);
    }

    private function getEquipDataArray($class, $findBy = [], $orderBy = [])
    {
        $itemData = [];
        $items = $this->getDoctrine()->getRepository($class)->findBy($findBy, $orderBy);

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