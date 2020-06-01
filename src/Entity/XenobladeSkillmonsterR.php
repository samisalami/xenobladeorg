<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeSkillmonsterR
 *
 * @ORM\Table(name="xenoblade_skillmonster_r")
 * @ORM\Entity
 */
class XenobladeSkillmonsterR
{
    /**
     * @var int
     *
     * @ORM\Column(name="sidmoid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sidmoid;

    /**
     * @var XenobladeSkills
     *
     * @ORM\ManyToOne(targetEntity="XenobladeSkills")
     * @ORM\JoinColumn(name="sid", referencedColumnName="sid", nullable=false)
     */
    private $skill;

    /**
     * @var XenobladeMonsters
     *
     * @ORM\ManyToOne(targetEntity="XenobladeMonsters")
     * @ORM\JoinColumn(name="moid", referencedColumnName="moid", nullable=false)
     */
    private $monster;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getSidmoid(): ?int
    {
        return $this->sidmoid;
    }

    public function getSkill(): ?XenobladeSkills
    {
        return $this->skill;
    }

    public function setSkill(XenobladeSkills $skill): self
    {
        $this->sid = $skill;

        return $this;
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
