<?php

namespace App\Controller;

use App\Entity\XenobladeJewelvalues;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class JewelsController extends AbstractController
{
    public function index()
    {
        $jewelValue = $this->getDoctrine()->getRepository(XenobladeJewelvalues::class)->findBy([], ['name' => 'ASC']);
        return $this->render('/items/jewels.html.twig', [
            'jewelValues' => $jewelValue
        ]);
    }
}
