<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class XenobladeMissionMapPoints
 * @package App\Entity
 * @ORM\Entity()
 */
class XenobladeMissionMapPoints extends XenobladeMapPoints
{
    /**
     * @var XenobladeMissions|null
     * @ORM\ManyToOne(targetEntity="XenobladeMissions")
     * @ORM\JoinColumn(name="typeid", referencedColumnName="mid")
     */
    private $mission;

    public function getMission(): ?XenobladeMissions
    {
        return $this->mission;
    }

    public function setMission(XenobladeMissions $mission): self
    {
        $this->mission = $mission;

        return $this;
    }
}
