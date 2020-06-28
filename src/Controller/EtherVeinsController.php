<?php

namespace App\Controller;

use App\Entity\XenobladeChapters;
use App\Entity\XenobladeEthervein;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EtherVeinsController extends AbstractController
{
    public function index()
    {
        $chapters = $this->getDoctrine()->getRepository(XenobladeChapters::class)->findBy(
            ['hasmap' => true],
            ['prio' => 'ASC']
        );

        $etherVeins = $this->getDoctrine()->getRepository(XenobladeEthervein::class)->findBy([], ['level' => 'ASC','name' => 'ASC', ]);

        $groupedEtherVeins = [];
        foreach ($chapters as $chapter) {
            /** @var XenobladeChapters $chapter */
            $groupedEtherVeins[$chapter->getName()] = array_filter($etherVeins, function ($etherVein) use ($chapter) {
                /** @var XenobladeEthervein $etherVein */
                return $etherVein->getMapPoint()->getMap()->getChapter()->getCid() === $chapter->getCid();
            });
        }

        return $this->render('/items/ether_veins.html.twig', [
            'groupedEtherVeins' => $groupedEtherVeins
        ]);
    }
}
