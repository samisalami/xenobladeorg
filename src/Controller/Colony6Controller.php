<?php
namespace App\Controller;

use App\Entity\XenobladeColony6categories;
use App\Entity\XenobladeColony6categorylevels;
use App\Entity\XenobladeColony6categorylevelitemR;
use App\Entity\XenobladeColony6levelitemR;
use App\Entity\XenobladeColony6categorieslevelsR;
use App\Entity\XenobladePersons;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Colony6Controller extends AbstractController
{
    public function index() {
        $categories = $this->getDoctrine()->getRepository(XenobladeColony6categories::class)->findBy([],[
            'prio' => 'ASC'
        ]);
        $categoryLevels = $this->getDoctrine()->getRepository(XenobladeColony6categorylevels::class)->findBy([],[
            'level' => 'ASC'
        ]);
        $categoryLevelLinks = $this->getDoctrine()->getRepository(XenobladeColony6categorieslevelsR::class)->findAll();
        $categoryLevelItemLinks = $this->getDoctrine()->getRepository(XenobladeColony6categorylevelitemR::class)->findAll();
        $levelItemLinks = $this->getDoctrine()->getRepository(XenobladeColony6levelitemR::class)->findAll();

        $invitePersonsNoSpoiler = $this->getDoctrine()->getRepository(XenobladePersons::class)->findBy(['colony6' => true, 'spoiler' => false]);

        $invitePersonsSpoiler = $this->getDoctrine()->getRepository(XenobladePersons::class)->findBy(['colony6' => true, 'spoiler' => true]);

        $costsData = [];
        foreach ($categoryLevelLinks as $link) {
            $level = $link->getCategoryLevel()->getLevel();
            $category = $link->getCategory()->getName();
            $costs = $link->getCosts();

            $costsData[$level][$category] = $costs;
        }

        $itemArrays = [];
        foreach ($levelItemLinks as $link) {
            $level = $link->getCategoryLevelLink()->getCategoryLevel()->getLevel();
            $category = $link->getCategoryLevelLink()->getCategory()->getName();
            $item = $link->getItem();
            $itemCount = $link->getItemCount();

            if (!array_key_exists($level, $itemArrays)) {
                $itemArrays[$level] = [];
            }

            if (!array_key_exists($category, $itemArrays[$level])) {
                $itemArrays[$level][$category] = [];
            }

            array_push($itemArrays[$level][$category], [$itemCount, $item]);
        }


        $rewardItems = [];
        foreach ($categoryLevelItemLinks as $link) {
            $level = $link->getCategoryLevel()->getLevel()->getLevel();
            $item = $link->getItem();

            if (!array_key_exists($level, $itemArrays)) {
                $itemArrays[$level] = [];
            }

            array_push($rewardItems[$level], $item);
        }

        $chapterInvitePersonsNoSpoiler = $this->getChapterPersons($invitePersonsNoSpoiler);
        $chapterInvitePersonsSpoiler = $this->getChapterPersons($invitePersonsSpoiler);
     /*   foreach ($invitePersons as $person) {
            $chapter = $person->getChapter()->getName();

            if (!array_key_exists($chapter, $chapterInvitePersons)) {
                $chapterInvitePersons[$chapter] = [];
            }

            array_push($chapterInvitePersons[$chapter], $person);
        }
*/

        return $this->render('guides/colony6.html.twig',
                              [ 'categories' => $categories,
                                'categoryLevels' => $categoryLevels,
                                'costsData' => $costsData,
                                'itemArrays' => $itemArrays,
                                'rewardItems' => $rewardItems,
                                'chapterInvitePersonsNoSpoiler' => $chapterInvitePersonsNoSpoiler,
                                'chapterInvitePersonsSpoiler' => $chapterInvitePersonsSpoiler
                              ]
                            );

    }

    /*
     * Returns an array of persons indexed by chaptername
     * and sorted by chapter prio
     */
    private function getChapterPersons(?array $Persons) : array {
        $chapterPersons = [];
        foreach ($Persons as $person) {
            $chapter = $person->getChapter()->getName();

            if (!array_key_exists($chapter, $chapterPersons)) {
                $chapterPersons[$chapter] = [];
            }

            array_push($chapterPersons[$chapter], $person);
        }

        // sort by chapter prio
        uasort($chapterPersons, function(array $persons1, array $persons2) {
            // get the chapter from the first person in the array
            $prio1 = $persons1[0]->getChapter()->getPrio();
            $prio2 = $persons2[0]->getChapter()->getPrio();
            if ($prio1 == $prio2) {
                return 0;
            }

            return $prio1 < $prio2 ? -1 : 1;
        });

        return $chapterPersons;
    }
}
