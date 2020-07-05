<?php
namespace App\Controller;
use App\Entity\XenobladeTrophies;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TrophiesController extends AbstractController
{
    public function index()
    {

        $trials = $this->getDoctrine()->getRepository(XenobladeTrophies::class)->findBy(
            ['type' => true],
            ['prio' => 'ASC']
        );

        $records = $this->getDoctrine()->getRepository(XenobladeTrophies::class)->findBy(
            ['type' => false],
            ['prio' => 'ASC']
        );

        return $this->render('/extras/trophies.html.twig', [
            'trials' => $trials,
            'records' => $records,
        ]);
    }
}
