<?php

namespace App\Controller;

use App\Entity\XenobladeChapters;
use App\Entity\XenobladeCharacters;
use App\Entity\XenobladeCollectionItems;
use App\Entity\XenobladeEthervein;
use App\Entity\XenobladeImportantItems;
use App\Entity\XenobladeJewelvalues;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ItemBoxController extends AbstractController
{
    public function important()
    {
        $items = $this->getDoctrine()->getRepository(XenobladeImportantItems::class)->findBy([], [
            'name' => 'ASC'
        ]);

        return $this->render('/items/important_items.html.twig', [
            'items' => $items
        ]);
    }

    public function jewels()
    {
        $jewelValue = $this->getDoctrine()->getRepository(XenobladeJewelvalues::class)->findBy([], ['name' => 'ASC']);
        return $this->render('/items/jewels.html.twig', [
            'jewelValues' => $jewelValue
        ]);
    }

    public function etherveins()
    {
        $chapters = $this->getDoctrine()->getRepository(XenobladeChapters::class)->findBy(
            ['hasmap' => true],
            ['prio' => 'ASC']
        );

        $etherVeins = $this->getDoctrine()->getRepository(XenobladeEthervein::class)->findBy([], ['level' => 'ASC','name' => 'ASC', ]);

        $groupedEtherVeins = [];
        foreach ($chapters as $chapter) {
            /** @var XenobladeChapters $chapter */
            $groupedEtherVeins[$chapter->getName()] = array_filter($etherVeins, function ($etherVein) use ($chapter) {
                /** @var XenobladeEthervein $etherVein */
                return $etherVein->getMapPoint()->getMap()->getChapter()->getCid() === $chapter->getCid();
            });
        }

        return $this->render('/items/ether_veins.html.twig', [
            'groupedEtherVeins' => $groupedEtherVeins
        ]);
    }

    public function collectionItems(?string $name)
    {
        $items = $this->getDoctrine()->getRepository(XenobladeCollectionItems::class)->findAll();
        $characters = $this->getDoctrine()->getRepository(XenobladeCharacters::class)->findBy([
            'isStory' => true
        ],[
            'prio' => 'ASC'
        ]);

        if ($name) {
            $name = ucfirst($name);
            $items = array_filter($items, function (XenobladeCollectionItems $item) use ($name) {
                return $item->getHarmonies()[$name] > 15;
            });
        } else {
            $name = null;
        }

        return $this->render('items/collection_items.html.twig', [
            'items' => $items,
            'characters' => $characters,
            'name' => $name
        ]);
    }
}
