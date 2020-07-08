<?php
namespace App\Controller;
use App\Entity\XenobladeHarmonymeetings;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HarmonyMeetingsController extends AbstractController
{
    public function index()
    {

        $harmonyMeetings = $this->getDoctrine()->getRepository(XenobladeHarmonymeetings::class)->findBy(
            [],
            ['hmid' => 'asc']
        );

        // create arrays for the filters
        $personArray = [];
        $chapterArray = [];

        foreach ($harmonyMeetings as $meeting) {
            $person1 = $meeting->getPerson1();
            $person2 = $meeting->getPerson2();
            $chapter = $meeting->getChapter();

            if(!in_array($person1, $personArray)) {
                $personArray[] = $person1;
            }
            if(!in_array($person2, $personArray)) {
                $personArray[] = $person2;
            }
            if(!in_array($chapter, $chapterArray)) {
                $chapterArray[] = $chapter;
            }
        }

        // sort by prio
        usort($personArray, function($a, $b) {
            $prio1 = $a->getPrio();
            $prio2 = $b->getPrio();
            return $prio1 < $prio2 ? -1 : 1;
        });

        usort($chapterArray, function($a, $b) {
            $prio1 = $a->getPrio();
            $prio2 = $b->getPrio();
            return $prio1 < $prio2 ? -1 : 1;
        });



        return $this->render('/extras/harmony_meetings.html.twig', [
            'harmonyMeetings' => $harmonyMeetings,
            'personFilterList' => $personArray,
            'chapterFilterList' => $chapterArray
        ]);
    }
}
