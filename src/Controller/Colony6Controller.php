<?php
namespace App\Controller;

use App\Entity\XenobladeColony6categories;
use App\Entity\XenobladeColony6categorylevels;
use App\Entity\XenobladeColony6categorylevelitemR;
use App\Entity\XenobladeColony6levelitemR;
use App\Entity\XenobladeColony6categorieslevelsR;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Colony6Controller extends AbstractController
{
    public function index() {
        $categories = $this->getDoctrine()->getRepository(XenobladeColony6categories::class)->findBy([],[
            'prio' => 'ASC'
        ]);
        $category_levels = $this->getDoctrine()->getRepository(XenobladeColony6categorylevels::class)->findBy([],[
            'level' => 'ASC'
        ]);
        $category_level_links = $this->getDoctrine()->getRepository(XenobladeColony6categorieslevelsR::class)->findAll();

        return $this->render('guides/colony6.html.twig',
                              [ 'categories' => $categories,
                                'category_levels' => $category_levels
                              ]
                            );

    }
}
