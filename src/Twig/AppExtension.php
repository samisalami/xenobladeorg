<?php
namespace App\Twig;

use App\Entity\XenobladeArms;
use App\Entity\XenobladeBodies;
use App\Entity\XenobladeChapters;
use App\Entity\XenobladeChestitemsR;
use App\Entity\XenobladeEquipSockettypeR;
use App\Entity\XenobladeFeet;
use App\Entity\XenobladeHeads;
use App\Entity\XenobladeItemMissionR;
use App\Entity\XenobladeJewels;
use App\Entity\XenobladeLegs;
use App\Entity\XenobladeSkillbooks;
use App\Entity\XenobladeSockettype;
use App\Entity\XenobladeWeapons;
use Doctrine\ORM\EntityManagerInterface;
use ReflectionClass;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use Twig\TwigTest;

class AppExtension extends AbstractExtension
{
    private $router;
    private $em;

    public function __construct(UrlGeneratorInterface $router, EntityManagerInterface $em)
    {
        $this->router = $router;
        $this->em = $em;
    }

    public function getFilters()
    {
        return [
            new TwigFilter('hearts', [$this, 'getHarmonyCount']),
            new TwigFilter('itemLink', [$this, 'getItemLink']),
        ];
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('missionChapters', [$this, 'getMissionChapters']),
            new TwigFunction('missionLootList', [$this, 'missionLootList']),
            new TwigFunction('chestLootList', [$this, 'chestLootList']),
            new TwigFunction('socketSuffix', [$this, 'getSocketSuffix'])
        ];
    }

    public function getTests()
    {
        return [
            new TwigTest('instanceof', [$this, 'isInstanceof']),
            new TwigTest('gear', [$this, 'isGearInstance'])
        ];
    }

    public function isInstanceof($var, $instance) {
        try {
            $reflexionClass = new ReflectionClass($instance);
            return $reflexionClass->isInstance($var);
        } catch (\ReflectionException $e) {
            return false;
        }
    }

    public function isGearInstance($var) {
        return $this->isInstanceof($var, XenobladeHeads::class) ||
        $this->isInstanceof($var, XenobladeBodies::class) ||
        $this->isInstanceof($var, XenobladeArms::class) ||
        $this->isInstanceof($var, XenobladeFeet::class) ||
        $this->isInstanceof($var, XenobladeLegs::class);
    }

    public function getItemLink($item) {
        switch ($item) {
            case $this->isGearInstance($item):
                return $this->router->generate('gear').'#iid'.$item->getIid();
            case $this->isInstanceof($item, XenobladeJewels::class):
                return $this->router->generate('jewels').'#jvid'.$item->getJewelValue()->getJvId();
            case $this->isInstanceof($item, XenobladeWeapons::class):
                return $this->router->generate('weapons').'#iid'.$item->getIid();
            case $this->isInstanceof($item, XenobladeSkillbooks::class):
                return $this->router->generate('skills').'#sid'.$item->getSkill()->getSid();
            default:
                return '';
        }
    }

    public function getSocketSuffix($socket) {
        /** @var XenobladeSockettype $socket */
        if (!$socket) {
            return null;
        }

        if (!$socket->getNotfixed()) {
            return '(V)';
        }

        if ($socket->getEmptySlots()) {
            return '('.$socket->getEmptySlots().')';
        }

        return null;
    }

    public function getHarmonyCount($value) {
        $value = intval($value);
        $count = 0;
        if($value>0)
        {
            $count++;
        }
        if($value>15)
        {
            $count++;
        }
        if($value>21)
        {
            $count++;
        }
        if($value==100)
        {
            $count++;
        }
        return $count;
    }

    /** FUNCTIONS */

    public function getMissionChapters()
    {
        return $this->em->getRepository(XenobladeChapters::class)->findBy(
            ['missionChapter' => true],
            ['prio' => 'asc']
        );
    }

    public function chestLootList(array $chestItemRelations) {
        /** @var $chestItemRelations XenobladeChestitemsR[] */

        $items = [];

        foreach ($chestItemRelations as $relation) {
            if (!array_key_exists($relation->getItem()->getItemcategory()->getName(), $items)) {
                $items[$relation->getItem()->getItemcategory()->getName()] = [];
            }

            array_push($items[$relation->getItem()->getItemcategory()->getName()], $relation);
        }

        return $items;
    }

    public function missionLootList(array $missionItemRelations) {
        /** @var $missionItemRelations XenobladeItemMissionR[] */

        $items = [];

        foreach ($missionItemRelations as $relation) {
            if (!$relation->getItem()) {
                $itemData = $relation->getEquipSockettypeR();
            } else {
                // work around messed up db schema
                $itemData = new XenobladeEquipSockettypeR();
                $itemData->setItem($relation->getItem());
            }
            if (!array_key_exists($itemData->getItem()->getItemcategory()->getName(), $items)) {
                $items[$itemData->getItem()->getItemcategory()->getName()] = [];
            }

            array_push($items[$itemData->getItem()->getItemcategory()->getName()], $itemData);
        }

        return $items;
    }
}