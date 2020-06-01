<?php
namespace App\Controller;

use App\Entity\XenobladeStoryfight;
use App\Entity\XenobladeStoryFightMapPoints;
use App\Entity\XenobladeMonsterstoryfightR;
use App\Entity\XenobladeSkillmonsterR;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StoryFightsController extends AbstractController
{
    public function index() {

        $fights = $this->getDoctrine()->getRepository(XenobladeStoryfight::class)->findBy([],[
            'prio' => 'ASC'
        ]);
        $fightPoints = $this->getDoctrine()->getRepository(XenobladeStoryFightMapPoints::class)->findAll();
        $monster_storyFight_links = $this->getDoctrine()->getRepository(XenobladeMonsterstoryfightR::class)->findBy([],[
            'prio' => 'ASC'
        ]);
        $skill_monster_links = $this->getDoctrine()->getRepository(XenobladeSkillmonsterR::class)->findAll();

        return $this->render('guides/story_fights.html.twig',
                              ['fights' => $fights,
                               'fightPoints' => $fightPoints,
                               'monster_links' => $monster_storyFight_links,
                               'skill_monster_links' => $skill_monster_links
                              ]
                            );
    }
}
