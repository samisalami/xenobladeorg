<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeEquipSockettypeR
 *
 * @ORM\Table(name="xenoblade_equip_sockettype_r")
 * @ORM\Entity
 */
class XenobladeEquipSockettypeR
{
    /**
     * @var int
     *
     * @ORM\Column(name="eqstid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eqstid;

    /**
     * @var int
     *
     * @ORM\Column(name="iid", type="integer", nullable=false)
     */
    private $iid;

    /**
     * @var int
     *
     * @ORM\Column(name="stid", type="integer", nullable=false)
     */
    private $stid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getEqstid(): ?int
    {
        return $this->eqstid;
    }

    public function getIid(): ?int
    {
        return $this->iid;
    }

    public function setIid(int $iid): self
    {
        $this->iid = $iid;

        return $this;
    }

    public function getStid(): ?int
    {
        return $this->stid;
    }

    public function setStid(int $stid): self
    {
        $this->stid = $stid;

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
