<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeBattlestatusskillR
 *
 * @ORM\Table(name="xenoblade_battlestatusskill_r")
 * @ORM\Entity
 */
class XenobladeBattlestatusskillR
{
    /**
     * @var int
     *
     * @ORM\Column(name="battlestatusskillid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $battlestatusskillid;

    /**
     * @var int
     *
     * @ORM\Column(name="battlestatusid", type="integer", nullable=false)
     */
    private $battlestatusid;

    /**
     * @var int
     *
     * @ORM\Column(name="sid", type="integer", nullable=false)
     */
    private $sid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getBattlestatusskillid(): ?int
    {
        return $this->battlestatusskillid;
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

    public function getSid(): ?int
    {
        return $this->sid;
    }

    public function setSid(int $sid): self
    {
        $this->sid = $sid;

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
