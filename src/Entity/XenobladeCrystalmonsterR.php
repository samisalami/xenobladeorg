<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeCrystalmonsterR
 *
 * @ORM\Table(name="xenoblade_crystalmonster_r")
 * @ORM\Entity
 */
class XenobladeCrystalmonsterR
{
    /**
     * @var int
     *
     * @ORM\Column(name="crmoid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $crmoid;

    /**
     * @var int
     *
     * @ORM\Column(name="crid", type="integer", nullable=false)
     */
    private $crid;

    /**
     * @var int
     *
     * @ORM\Column(name="moid", type="integer", nullable=false)
     */
    private $moid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getCrmoid(): ?int
    {
        return $this->crmoid;
    }

    public function getCrid(): ?int
    {
        return $this->crid;
    }

    public function setCrid(int $crid): self
    {
        $this->crid = $crid;

        return $this;
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
