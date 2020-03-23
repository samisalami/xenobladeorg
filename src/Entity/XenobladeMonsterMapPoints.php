<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class XenobladeMonsterMapPoints
 * @package App\Entity
 * @ORM\Entity()
 */
class XenobladeMonsterMapPoints extends XenobladeMapPoints
{
    /**
     * @var XenobladeMonsters|null
     * @ORM\ManyToOne(targetEntity="XenobladeMonsters")
     * @ORM\JoinColumn(name="typeid", referencedColumnName="moid")
     */
    private $monster;

    public function getMonster(): ?XenobladeMonsters
    {
        return $this->monster;
    }

    public function setMonster(XenobladeMonsters $monster): self
    {
        $this->monster = $monster;

        return $this;
    }
}
