<?php
namespace App\Controller;
use App\Entity\XenobladeChapters;
use App\Entity\XenobladePersons;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PersonsController extends AbstractController
{
    public function index()
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
                    'spoiler' => false,
                    'story' => false
                ]
            );
            $groupedPersons[$chapter->getName()] = $persons;
        }

        return $this->render('/persons/persons.html.twig', [
            'groupedPersons' => $groupedPersons
        ]);
    }
}
