<?php
namespace App\Controller;
use App\Entity\XenobladeChestitemsR;
use App\Entity\XenobladeEquipSockettypeR;
use App\Entity\XenobladeItemMissionR;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ItemsController extends AbstractController
{
    public function index()
    {
        return $this->render('index.html.twig');
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
}