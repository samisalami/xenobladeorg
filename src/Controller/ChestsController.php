<?php
namespace App\Controller;
use App\Entity\XenobladeChapters;
use App\Entity\XenobladeChests;
use App\Entity\XenobladeMappoints;
use App\Entity\XenobladeMaps;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ChestsController extends AbstractController
{
    public function index()
    {
        $chapters = $this->getDoctrine()->getRepository(XenobladeChapters::class)->findBy(
            ['hasmap' => 1],
            ['prio' => 'ASC']
        );
        $maps = $this->getDoctrine()->getRepository(XenobladeMaps::class)->findAll();
        $mapPoints = $this->getDoctrine()->getRepository(XenobladeMappoints::class)->findAllChestPoints();
        $chests = $this->getDoctrine()->getRepository(XenobladeChests::class)->findBy([], ['prio' => 'ASC']);
        return $this->render('chests.html.twig', [
            'chapters' => $chapters,
            'maps' => $maps,
            'mapPoints' => $mapPoints,
            'chests' => $chests
        ]);
    }
}