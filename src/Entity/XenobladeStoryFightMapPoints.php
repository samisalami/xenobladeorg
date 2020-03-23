<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class XenobladeStoryFightMapPoints
 * @package App\Entity
 * @ORM\Entity()
 */
class XenobladeStoryFightMapPoints extends XenobladeMapPoints
{
    /**
     * @var XenobladeStoryfight|null
     * @ORM\ManyToOne(targetEntity="XenobladeStoryfight")
     * @ORM\JoinColumn(name="typeid", referencedColumnName="sfid")
     */
    private $storyFight;

    public function getStoryFight(): ?XenobladeStoryfight
    {
        return $this->storyFight;
    }

    public function setStoryFight(XenobladeStoryfight $storyFight): self
    {
        $this->storyFight = $storyFight;

        return $this;
    }
}
