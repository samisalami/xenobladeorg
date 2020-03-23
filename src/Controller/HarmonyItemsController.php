<?php
namespace App\Controller;

use App\Entity\XenobladeCharacters;
use App\Entity\XenobladeCollectionItems;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HarmonyItemsController extends AbstractController
{
    public function index()
    {

        $items = $this->getDoctrine()->getRepository(XenobladeCollectionItems::class)->findAll();
        return $this->render('harmony_items.html.twig', [
            'items' => $items
        ]);
    }
}