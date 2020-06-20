<?php
namespace App\Controller;


use App\Entity\XenobladeChapters;
use App\Entity\XenobladeEtherVeinMapPoints;
use App\Entity\XenobladeInfoMapPoints;
use App\Entity\XenobladeMaps;
use App\Entity\XenobladeRegionMapPoints;
use App\Entity\XenobladeSecretLocationMapPoints;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MapsController extends AbstractController
{
    public function index() {
        $chapters = $this->getDoctrine()->getRepository(XenobladeChapters::class)->findBy([
           'hasmap' => true
        ]);

        $mapsData = [];
        foreach ($chapters as $chapter)
        {
            $maps = $this->getDoctrine()->getRepository(XenobladeMaps::class)->findBy(
                [
                    'chapter' => $chapter
                ]
            );

            $mapData = [];
            foreach ($maps as $map)
            {
                /** @var XenobladeMaps $map */
                array_push($mapData, [
                    'map' => $map,
                    'landmarks' => $landmarks = $this->getDoctrine()->getRepository(XenobladeRegionMapPoints::class)->findBy([
                        'map' => $map
                    ]),
                    'secretLocations' => $this->getDoctrine()->getRepository(XenobladeSecretLocationMapPoints::class)->findBy([
                        'map' => $map
                    ]),
                    'etherVeins' => $this->getDoctrine()->getRepository(XenobladeEtherVeinMapPoints::class)->findBy([
                        'map' => $map
                    ]),
                    'notes' => $this->getDoctrine()->getRepository(XenobladeInfoMapPoints::class)->findBy([
                        'map' => $map
                    ])
                ]);
            }
            $mapsData[$chapter->getName()] = $mapData;
        }

        return $this->render('/maps/maps.html.twig', [
            'mapsData' => $mapsData
        ]);
    }

}
