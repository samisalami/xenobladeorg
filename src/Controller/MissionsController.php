<?php
namespace App\Controller;
use App\Entity\XenobladeChapters;
use App\Entity\XenobladeMissions;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MissionsController extends AbstractController
{
    /**
     * @param string|null $slug
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(?string $slug)
    {
        $chapter = null;
        if ($slug) {
            $chapter = $this->getDoctrine()->getRepository(XenobladeChapters::class)->findBy([
                'slug' => $slug
            ])[0];
            $missions = $this->getDoctrine()->getRepository(XenobladeMissions::class)->findBy(
                ['chapter' => $chapter],
                ['order' => 'ASC']
            );
        } else {
            $missions = $this->getDoctrine()->getRepository(XenobladeMissions::class)->findBy([], [
                'order' => 'ASC'
            ]);
        }

        return $this->render('missions.html.twig', [
            'chapter' => $chapter,
            'missions' => $missions
        ]);
    }
}
