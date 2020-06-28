<?php
namespace App\Controller;

use App\Entity\XenobladeExtraskills;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GuidesController extends AbstractController
{

    public function chainAttacks()
    {
        return $this->render("guides/chain_attacks.html.twig");
    }

    public function character(string $character)
    {
        return $this->render(str_replace("{NAME}", $character, "guides/charakter_{NAME}.html.twig"));
    }

    public function gemCrafting()
    {
        return $this->render("guides/gem_crafting.html.twig");
    }

    public function gifts()
    {
        return $this->render('guides/gifts.html.twig');
    }

    public function skillTrees() {

        $skilltrees4 = $this->getDoctrine()->getRepository(XenobladeExtraskills::class)->findBy([
            'skill4' => true
        ],[
        ]);

        $skilltrees5 = $this->getDoctrine()->getRepository(XenobladeExtraskills::class)->findBy([
            'skill5' => true
        ],[
        ]);


        return $this->render('guides/extra_skill_trees.html.twig',
            [
                'skilltrees4' => $skilltrees4,
                'skilltrees5' => $skilltrees5
            ]
        );

    }
}
