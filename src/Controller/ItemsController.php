<?php
namespace App\Controller;
use App\Entity\XenobladeChestitemsR;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ItemsController extends AbstractController
{
    public function index()
    {
        return $this->render('index.html.twig');
    }

    public function itemLootList(array $chestItemRelations) {
        /** @var $chestItemRelations XenobladeChestitemsR[] */

        $items = [];

        foreach ($chestItemRelations as $relation) {
            if (!array_key_exists($relation->getItem()->getItemcategory()->getName(), $items)) {
                $items[$relation->getItem()->getItemcategory()->getName()] = [];
            }

            array_push($items[$relation->getItem()->getItemcategory()->getName()], $relation);
        }

        return $this->render('_items.html.twig', [
            'items' => $items
        ]);
    }
}