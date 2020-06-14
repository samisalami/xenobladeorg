<?php
namespace App\Controller;

use App\Entity\XenobladeExtraskills;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExtraSkillTreesController extends AbstractController
{
    public function index() {

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
