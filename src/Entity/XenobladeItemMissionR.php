<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeItemmissionR
 *
 * @ORM\Table(name="xenoblade_itemmission_r")
 * @ORM\Entity
 */
class XenobladeItemMissionR
{
    /**
     * @var int
     *
     * @ORM\Column(name="imid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $imid;

    /**
     * @var XenobladeMissions
     *
     * @ORM\ManyToOne(targetEntity="XenobladeMissions", inversedBy="itemRelations")
     * @ORM\JoinColumn(name="mid", referencedColumnName="mid")
     */
    private $mission;

    /**
     * @var XenobladeItems
     *
     * @ORM\ManyToOne(targetEntity="XenobladeItems", inversedBy="missionRelations")
     * @ORM\JoinColumn(name="iid", referencedColumnName="iid")
     */
    private $item;

    /**
     * @var XenobladeEquipSockettypeR|null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeEquipSockettypeR")
     * @ORM\JoinColumn(name="eqstid", referencedColumnName="eqstid")
     */
    private $equipSockettypeR;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getImid(): ?int
    {
        return $this->imid;
    }

    public function getMission(): ?XenobladeMissions
    {
        return $this->mission;
    }

    public function setMission(XenobladeMissions $mission): self
    {
        $this->mission = $mission;

        return $this;
    }

    public function getItem(): ?XenobladeItems
    {
        return $this->item;
    }

    public function setItem(?XenobladeItems $item): self
    {
        $this->item = $item;

        return $this;
    }

    public function getEquipSockettypeR(): ?XenobladeEquipSockettypeR
    {
        return $this->equipSockettypeR;
    }

    public function setEquipSockettypeR(?XenobladeEquipSockettypeR $equipSockettypeR): self
    {
        $this->equipSockettypeR = $equipSockettypeR;

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
