<?php

namespace App\Controller;

use App\Entity\XenobladeCharacters;
use App\Entity\XenobladeChestitemsR;
use App\Entity\XenobladeFeet;
use App\Entity\XenobladeItemmerchantR;
use App\Entity\XenobladeItemMissionR;
use App\Entity\XenobladeItemmonsterR;
use App\Entity\XenobladeSkillbooks;
use App\Entity\XenobladeSkills;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SkillsController extends AbstractController
{
    public function index()
    {
        $skillViewData = [];
        $characters = $this->getDoctrine()->getRepository(XenobladeCharacters::class)->findBy([], [
            'prio' => 'asc'
        ]);

        foreach ($characters as $character) {
            $skills = $this->getDoctrine()->getRepository(XenobladeSkills::class)->findBy([
                'character' => $character
            ], [
                'prio' => 'ASC'
            ]);

            $skillData = [];
            foreach ($skills as $skill) {
                $drones = $this->getDoctrine()->getRepository(XenobladeFeet::class)->findBy([
                    'skill' => $skill
                ]);

                $skillBooks = $this->getDoctrine()->getRepository(XenobladeSkillbooks::class)->findBy([
                    'skill' => $skill
                ]);

                $skillBookData = [];
                foreach ($skillBooks as $skillBook) {
                    array_push($skillBookData, [
                        'merchants' => array_map(function ($relation) {
                            return $relation->getMerchant();
                        }, $this->getDoctrine()->getRepository(XenobladeItemmerchantR::class)->findBy([
                            'item' => $skillBook
                        ])),
                        'missions' => array_map(function ($relation) {
                            return $relation->getMission();
                        }, $this->getDoctrine()->getRepository(XenobladeItemMissionR::class)->findBy([
                            'item' => $skillBook
                        ])),
                        'monsters' => array_map(function ($relation) {
                            return $relation->getMonster();
                        }, $this->getDoctrine()->getRepository(XenobladeItemmonsterR::class)->findBy([
                            'item' => $skillBook
                        ])),
                        'chests' => array_map(function ($relation) {
                            return $relation->getChest();
                        }, $this->getDoctrine()->getRepository(XenobladeChestitemsR::class)->findBy([
                            'item' => $skillBook
                        ])),
                    ]);
                }

                array_push($skillData, [
                    'skill' => $skill,
                    'drone' => count($drones) > 0 ? $drones : null,
                    'skillBookData' => $skillBookData
                ]);
            }

            array_push($skillViewData, [
                'character' => $character,
                'skills' => $skillData
            ]);
        }

        dump($skillViewData);

        return $this->render('index.html.twig');
    }
}