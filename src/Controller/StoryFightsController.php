<?php
namespace App\Controller;

use App\Entity\XenobladeStoryfight;
use App\Entity\XenobladeStoryFightMapPoints;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StoryFightsController extends AbstractController
{
    public function index() {

        $fights = $this->getDoctrine()->getRepository(XenobladeStoryfight::class)->findBy([],[
            'prio' => 'ASC'
        ]);
        $fightPoints = $this->getDoctrine()->getRepository(XenobladeStoryFightMapPoints::class)->findAll();

        return $this->render('guides/story_fights.html.twig',
                              ['fights' => $fights,
                               'fightPoints' => $fightPoints
                              ]
                            );
    }
}
