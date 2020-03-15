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
     * @var int
     *
     * @ORM\Column(name="moid", type="integer", nullable=false)
     */
    private $moid;

    /**
     * @var int
     *
     * @ORM\Column(name="sfid", type="integer", nullable=false)
     */
    private $sfid;

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

    public function getMoid(): ?int
    {
        return $this->moid;
    }

    public function setMoid(int $moid): self
    {
        $this->moid = $moid;

        return $this;
    }

    public function getSfid(): ?int
    {
        return $this->sfid;
    }

    public function setSfid(int $sfid): self
    {
        $this->sfid = $sfid;

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
