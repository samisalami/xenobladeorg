<?php
namespace App\Controller;
use App\Entity\XenobladeChapters;
use App\Entity\XenobladeMissions;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MissionsController extends AbstractController
{
    /**
     * @ParamConverter("chapter", class="App\Entity\XenobladeChapters")
     * @param XenobladeChapters|null $chapter
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(?XenobladeChapters $chapter)
    {
        if ($chapter) {
            $missions = $this->getDoctrine()->getRepository(XenobladeMissions::class)->findBy(['chapter' => $chapter]);
        } else {
            $missions = $this->getDoctrine()->getRepository(XenobladeMissions::class)->findAll();
        }
        return $this->render('missions.html.twig', [
            'chapter' => $chapter,
            'missions' => $missions
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
