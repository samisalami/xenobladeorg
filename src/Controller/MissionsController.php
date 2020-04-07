<?php
namespace App\Controller;
use App\Entity\XenobladeChapters;
use App\Entity\XenobladeMissions;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MissionsController extends AbstractController
{
    public function index(?XenobladeChapters $chapter)
    {
        $missions = [];
        if ($chapter) {
            $missions = $this->getDoctrine()->getRepository(XenobladeMissions::class)->findBy(['cid' => $chapter->getCid()]);
        } else {
            $missions = $this->getDoctrine()->getRepository(XenobladeMissions::class)->findAll();
        }
        return $this->render('missions.html.twig', [
        ]);
    }

    public function subMenu() {
        return $this->render('missions/_submenu.html.twig');
    }

    public function menu() {
        $chapters = $this->getDoctrine()->getRepository(XenobladeChapters::class)->findAll();
        return $this->render('missions/_menu.html.twig', [
            'chapters' => $chapters
        ]);
    }
}
