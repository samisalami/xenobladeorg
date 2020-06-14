<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ChainAttacksController extends AbstractController
{

    public function index()
    {
        return $this->render("guides/chain_attacks.html.twig");
    }
}
