<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeMissionconditionMissiongroup
 *
 * @ORM\Table(name="xenoblade_missioncondition_missiongroup")
 * @ORM\Entity
 */
class XenobladeMissionconditionMissiongroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="mcmgid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mcmgid;

    /**
     * @var int
     *
     * @ORM\Column(name="mid", type="integer", nullable=false)
     */
    private $mid;

    /**
     * @var int
     *
     * @ORM\Column(name="conditionalmid", type="integer", nullable=false)
     */
    private $conditionalmid;

    /**
     * @var bool
     *
     * @ORM\Column(name="accepted", type="boolean", nullable=false)
     */
    private $accepted;

    /**
     * @var bool
     *
     * @ORM\Column(name="done", type="boolean", nullable=false)
     */
    private $done;

    /**
     * @var bool
     *
     * @ORM\Column(name="elapsed", type="boolean", nullable=false)
     */
    private $elapsed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getMcmgid(): ?int
    {
        return $this->mcmgid;
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

    public function getConditionalmid(): ?int
    {
        return $this->conditionalmid;
    }

    public function setConditionalmid(int $conditionalmid): self
    {
        $this->conditionalmid = $conditionalmid;

        return $this;
    }

    public function getAccepted(): ?bool
    {
        return $this->accepted;
    }

    public function setAccepted(bool $accepted): self
    {
        $this->accepted = $accepted;

        return $this;
    }

    public function getDone(): ?bool
    {
        return $this->done;
    }

    public function setDone(bool $done): self
    {
        $this->done = $done;

        return $this;
    }

    public function getElapsed(): ?bool
    {
        return $this->elapsed;
    }

    public function setElapsed(bool $elapsed): self
    {
        $this->elapsed = $elapsed;

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
