<?php
namespace App\Controller;
use App\Entity\XenobladeChestitemsR;
use App\Entity\XenobladeItemcategories;
use App\Entity\XenobladeItems;
use App\Entity\XenobladeJewels;
use App\Entity\XenobladeChests;
use App\Entity\XenobladeMappoints;
use App\Entity\XenobladeMaps;
use App\Entity\XenobladeSockettype;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ChestsController extends AbstractController
{
    public function index()
    {
        $maps = $this->getDoctrine()->getRepository(XenobladeMaps::class)->findAll();
        $chests = $this->getDoctrine()->getRepository(XenobladeChests::class)->findBy([], ['prio' => 'ASC']);

        $viewData = array_map(function(XenobladeMaps $map) use ($chests) {
            $chestPoints = $this->getDoctrine()->getRepository(XenobladeMappoints::class)->findAllChestPointsByMap($map);
            $data = [];
            foreach ($chests as $chest) {
                $chestPoint = array_filter($chestPoints, function (XenobladeMappoints $chestPoint) use ($chest) {
                    /** @var $chestPoint XenobladeMappoints */
                    return $chest->getChestid() == $chestPoint->getTypeId();
                });

                $items = [];
                $chestItemRelations = $this->getDoctrine()->getRepository(XenobladeChestitemsR::class)->findBy([
                    'chestid' => $chest->getChestid()
                ]);

                foreach ($chestItemRelations as $relation) {
                    if (!array_key_exists($relation->getItem()->getItemcategory()->getName(), $items)) {
                        $items[$relation->getItem()->getItemcategory()->getName()] = [];
                    }

                    array_push($items[$relation->getItem()->getItemcategory()->getName()], $relation);
                }

                array_push($data, [
                    'map' => $map,
                    'chest' => $chest,
                    'mapPoint' => array_pop($chestPoint),
                    'items' => $items
                ]);
            }
            return $data;
        }, $maps);

        return $this->render('chests.html.twig', [
            'viewData' => $viewData
        ]);
    }
}