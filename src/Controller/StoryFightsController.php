<?php

namespace App\Controller;

use App\Entity\XenobladeMonsters;
use App\Entity\XenobladeStoryfight;
use App\Entity\XenobladeStoryFightMapPoints;
use App\Entity\XenobladeMonsterstoryfightR;
use App\Entity\XenobladeSkillmonsterR;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StoryFightsController extends AbstractController
{
    public function index()
    {
        $fightData = [];
        $fights = $this->getDoctrine()->getRepository(XenobladeStoryfight::class)->findBy([], [
            'prio' => 'ASC'
        ]);

        foreach ($fights as $fight) {
            $monsterRelations = $this->getDoctrine()->getRepository(XenobladeMonsterstoryfightR::class)->findBy([
                'storyFight' => $fight
            ]);
            $monsterData = [];

            foreach ($monsterRelations as $monsterRelation) {
                /** @var XenobladeMonsterstoryfightR $monsterRelation */
                if ($monsterRelation->getMonster()) {
                    $monster = $monsterRelation->getMonster();
                    $skillRelations = $this->getDoctrine()->getRepository(XenobladeSkillmonsterR::class)->findBy([
                        'monster' => $monster
                    ]);
                    $skills = [];
                    foreach ($skillRelations as $skillRelation) {
                        /** @var XenobladeSkillmonsterR $skillRelation */
                        if ($skillRelation->getSkill()) {
                            array_push($skills, $skillRelation->getSkill());
                        }
                    }
                    array_push($monsterData, [
                        'monster' => $monster,
                        'skills' => $skills
                    ]);
                }
            }

            $fightPoints = $this->getDoctrine()->getRepository(XenobladeStoryFightMapPoints::class)->findBy([
                'storyFight' => $fight
            ]);

            array_push($fightData, [
                'fight' => $fight,
                'monsters' => $monsterData,
                'mapPoint' => $fightPoints ? $fightPoints[0] : null
            ]);
        }

        return $this->render('guides/story_fights.html.twig',
            [
                'fightViewData' => $fightData
            ]
        );
    }
}
