<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeMonsterstoryfightR
 *
 * @ORM\Table(name="xenoblade_monsterstoryfight_r")
 * @ORM\Entity
 */
class XenobladeMonsterstoryfightR
{
    /**
     * @var int
     *
     * @ORM\Column(name="mosfid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mosfid;

    /**
     * @var XenobladeMonsters
     *
     * @ORM\ManyToOne(targetEntity="XenobladeMonsters")
     * @ORM\JoinColumn(name="moid", referencedColumnName="moid", nullable=false)
     */
    private $monster;

    /**
     * @var XenobladeStoryfight
    *
     * @ORM\ManyToOne(targetEntity="XenobladeStoryfight")
     * @ORM\JoinColumn(name="sfid", referencedColumnName="sfid", nullable=false)
     */
    private $storyFight;

    /**
     * @var int
     *
     * @ORM\Column(name="prio", type="integer", nullable=false)
     */
    private $prio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getMosfid(): ?int
    {
        return $this->mosfid;
    }

    public function getMonster(): ?XenobladeMonsters
    {
        return $this->monster;
    }

    public function setMonster(XenobladeMonsters $monster): self
    {
        $this->monster = $monster;

        return $this;
    }

    public function getStoryFight(): ?XenobladeStoryfight
    {
        return $this->storyFight;
    }

    public function setStoryFight(XenobladeStoryfight $storyFight): self
    {
        $this->storyFight = $storyFight;

        return $this;
    }

    public function getPrio(): ?int
    {
        return $this->prio;
    }

    public function setPrio(int $prio): self
    {
        $this->prio = $prio;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }


}
