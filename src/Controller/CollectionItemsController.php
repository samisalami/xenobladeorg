<?php
namespace App\Controller;

use App\Entity\XenobladeCharacters;
use App\Entity\XenobladeCollectionItems;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CollectionItemsController extends AbstractController
{
    /**
     * @ParamConverter("character", class="App\Entity\XenobladeCharacters")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(?XenobladeCharacters $character)
    {
        $items = $this->getDoctrine()->getRepository(XenobladeCollectionItems::class)->findAll();
        $characters = $this->getDoctrine()->getRepository(XenobladeCharacters::class)->findBy([
            'isStory' => true
        ],[
            'prio' => 'ASC'
        ]);

        if ($character) {
            $items = array_filter($items, function (XenobladeCollectionItems $item) use ($character) {
               return $item->getHarmonies()[$character->getName()] > 15;
            });
        }

        return $this->render('collection_items.html.twig', [
            'items' => $items,
            'characters' => $characters,
            'character' => $character
        ]);
    }
}