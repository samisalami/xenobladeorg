<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeMissionMissionconditionPersongroupR
 *
 * @ORM\Table(name="xenoblade_mission_missioncondition_persongroup_r")
 * @ORM\Entity
 */
class XenobladeMissionMissionconditionPersongroupR
{
    /**
     * @var int
     *
     * @ORM\Column(name="mmcpgid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mmcpgid;

    /**
     * @var int
     *
     * @ORM\Column(name="mid", type="integer", nullable=false)
     */
    private $mid;

    /**
     * @var string
     *
     * @ORM\Column(name="harmony", type="string", length=255, nullable=false)
     */
    private $harmony;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getMmcpgid(): ?int
    {
        return $this->mmcpgid;
    }

    public function getMid(): ?int
    {
        return $this->mid;
    }

    public function setMid(int $mid): self
    {
        $this->mid = $mid;

        return $this;
    }

    public function getHarmony(): ?string
    {
        return $this->harmony;
    }

    public function setHarmony(string $harmony): self
    {
        $this->harmony = $harmony;

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
