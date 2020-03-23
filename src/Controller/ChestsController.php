<?php
namespace App\Controller;
use App\Entity\XenobladeChestitemsR;
use App\Entity\XenobladeChestMapPoints;
use App\Entity\XenobladeChests;
use App\Entity\XenobladeMapPoints;
use App\Entity\XenobladeMaps;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ChestsController extends AbstractController
{
    public function index()
    {
        $chestData = [];
        $chestPoints = $this->getDoctrine()->getRepository(XenobladeChestMapPoints::class)->findAll();

        foreach ($chestPoints as $mapPoint) {
            /** @var XenobladeChestMapPoints $mapPoint */
            $chapter = $mapPoint->getMap()->getChapter()->getName();
            if (!array_key_exists($chapter, $chestData)) {
                $chestData[$chapter] = [];
            }

            array_push($chestData[$chapter], $mapPoint);
        }

        uasort($chestData, function($mapPointsByChapter1, $mapPointsByChapter2) {
            /** @var $mapPointsByChapter1 XenobladeChestMapPoints[] */
            /** @var $mapPointsByChapter2 XenobladeChestMapPoints[] */
            $prio1 = $mapPointsByChapter1[0]->getMap()->getChapter()->getPrio();
            $prio2 = $mapPointsByChapter2[0]->getMap()->getChapter()->getPrio();
            if ($prio1 == $prio2) {
                return 0;
            }

            return $prio1 < $prio2 ? -1 : 1;
        });

        $viewData = array_map(function($mapPointsByChapter){
            usort($mapPointsByChapter, function(XenobladeChestMapPoints $chestPoint1, XenobladeChestMapPoints $chestPoint2) {
                $prio1 = $chestPoint1->getChest()->getPrio();
                $prio2 = $chestPoint2->getChest()->getPrio();
                if ($prio1 == $prio2) {
                    return 0;
                }

                return $prio1 < $prio2 ? -1 : 1;
            });
            return $mapPointsByChapter;
        }, $chestData);

        return $this->render('chests.html.twig', [
            'viewData' => $viewData
        ]);
    }
}