<?php
namespace App\Controller;
use App\Entity\XenobladeHarmonymeetings;
#use App\Entity\XenobladePersons;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HarmonyMeetingsController extends AbstractController
{
    public function index()
    {

    $harmonyMeetings = $this->getDoctrine()->getRepository(XenobladeHarmonymeetings::class)->findBy(
            [],
            ['chapter' => 'asc']
        );

        return $this->render('/extras/harmony_meetings.html.twig', [
            'harmonyMeetings' => $harmonyMeetings
        ]);
    }
}
