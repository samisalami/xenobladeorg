<?php
namespace App\Controller;

use App\Entity\XenobladeCharacters;
use App\Entity\XenobladeCollectionItems;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CollectionItemsController extends AbstractController
{
    public function index(?string $name)
    {
        $items = $this->getDoctrine()->getRepository(XenobladeCollectionItems::class)->findAll();
        $characters = $this->getDoctrine()->getRepository(XenobladeCharacters::class)->findBy([
            'isStory' => true
        ],[
            'prio' => 'ASC'
        ]);

        if ($name) {
            $name = ucfirst($name);
            $items = array_filter($items, function (XenobladeCollectionItems $item) use ($name) {
               return $item->getHarmonies()[$name] > 15;
            });
        } else {
            $name = null;
        }

        return $this->render('items/collection_items.html.twig', [
            'items' => $items,
            'characters' => $characters,
            'name' => $name
        ]);
    }
}