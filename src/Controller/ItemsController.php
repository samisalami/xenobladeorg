<?php
namespace App\Controller;
use App\Entity\XenobladeChestitemsR;
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

        return $this->render('items/_items_chest.html.twig', [
            'items' => $items
        ]);
    }

    public function missionLootList(array $missionItemRelations) {
        /** @var $missionItemRelations XenobladeItemMissionR[] */

        $items = [];

        foreach ($missionItemRelations as $relation) {
            $item = $relation->getItem();
            if (!$item) {
                $item = $relation->getEquipSockettypeR()->getItem();
            }
            if (!array_key_exists($item->getItemcategory()->getName(), $items)) {
                $items[$item->getItemcategory()->getName()] = [];
            }

            array_push($items[$item->getItemcategory()->getName()], $relation);
        }

        return $this->render('items/_items_mission.html.twig', [
            'items' => $items
        ]);
    }
}