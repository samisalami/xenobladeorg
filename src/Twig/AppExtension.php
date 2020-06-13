<?php
namespace App\Twig;

use ReflectionClass;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigTest;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('hearts', [$this, 'getHarmonyCount']),
        ];
    }

    public function getTests()
    {
        return [
            new TwigTest('instanceof', [$this, 'isInstanceof'])
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