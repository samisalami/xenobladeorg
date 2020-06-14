<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GemCraftingController extends AbstractController
{

    public function index()
    {
        return $this->render("guides/gem_crafting.html.twig");
    }
}
