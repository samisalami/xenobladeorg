<?php
namespace App\Twig;

use App\Entity\XenobladeArms;
use App\Entity\XenobladeBodies;
use App\Entity\XenobladeFeet;
use App\Entity\XenobladeHeads;
use App\Entity\XenobladeJewels;
use App\Entity\XenobladeLegs;
use ReflectionClass;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigTest;

class AppExtension extends AbstractExtension
{
    private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }

    public function getFilters()
    {
        return [
            new TwigFilter('hearts', [$this, 'getHarmonyCount']),
            new TwigFilter('itemLink', [$this, 'getItemLink']),
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
                return $this->router->generate('equip').'#iid'.$item->getIid();
            case $this->isInstanceof($item, XenobladeJewels::class):
                return $this->router->generate('jewels').'#jvid'.$item->getJewelValue()->getJvId();
            default:
                return '';
        }
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
}