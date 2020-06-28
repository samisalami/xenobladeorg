<?php
namespace App\Controller;
use App\Entity\XenobladeChapters;
use App\Entity\XenobladePersons;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PersonsController extends AbstractController
{
    public function index()
    {
        return $this->render('/persons/persons.html.twig', [
            'groupedPersons' => $this->getGroupedPersons(),
            'spoiler' => false
        ]);
    }

    public function spoilerPersons()
    {
        return $this->render('/persons/persons.html.twig', [
            'groupedPersons' => $this->getGroupedPersons(true),
            'spoiler' => true
        ]);
    }

    private function getGroupedPersons($spoiler = false)
    {
        $chapters = $this->getDoctrine()->getRepository(XenobladeChapters::class)->findBy(
            ['personChapter' => true],
            ['prio' => 'asc']
        );

        $groupedPersons = [];
        foreach ($chapters as $chapter) {
            $persons = $this->getDoctrine()->getRepository(XenobladePersons::class)->findBy(
                [
                    'chapter' => $chapter,
                    'spoiler' => $spoiler,
                    'story' => false
                ],
                ['name' => 'asc']
            );
            $groupedPersons[$chapter->getName()] = $persons;
        }

        return $groupedPersons;
    }
}
