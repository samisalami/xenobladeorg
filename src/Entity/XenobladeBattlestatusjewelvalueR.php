<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeBattlestatusjewelvalueR
 *
 * @ORM\Table(name="xenoblade_battlestatusjewelvalue_r")
 * @ORM\Entity
 */
class XenobladeBattlestatusjewelvalueR
{
    /**
     * @var int
     *
     * @ORM\Column(name="battlestatusjewelvalueid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $battlestatusjewelvalueid;

    /**
     * @var int
     *
     * @ORM\Column(name="battlestatusid", type="integer", nullable=false)
     */
    private $battlestatusid;

    /**
     * @var int
     *
     * @ORM\Column(name="jvid", type="integer", nullable=false)
     */
    private $jvid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getBattlestatusjewelvalueid(): ?int
    {
        return $this->battlestatusjewelvalueid;
    }

    public function getBattlestatusid(): ?int
    {
        return $this->battlestatusid;
    }

    public function setBattlestatusid(int $battlestatusid): self
    {
        $this->battlestatusid = $battlestatusid;

        return $this;
    }

    public function getJvid(): ?int
    {
        return $this->jvid;
    }

    public function setJvid(int $jvid): self
    {
        $this->jvid = $jvid;

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
