<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('hearts', [$this, 'getHarmonyCount']),
        ];
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