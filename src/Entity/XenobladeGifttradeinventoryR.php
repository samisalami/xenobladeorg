<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeGifttradeinventoryR
 *
 * @ORM\Table(name="xenoblade_gifttradeinventory_r")
 * @ORM\Entity
 */
class XenobladeGifttradeinventoryR
{
    /**
     * @var int
     *
     * @ORM\Column(name="gtid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gtid;

    /**
     * @var int
     *
     * @ORM\Column(name="tiid", type="integer", nullable=false)
     */
    private $tiid;

    /**
     * @var int
     *
     * @ORM\Column(name="iid", type="integer", nullable=false)
     */
    private $iid;

    /**
     * @var int
     *
     * @ORM\Column(name="eqstid", type="integer", nullable=false)
     */
    private $eqstid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getGtid(): ?int
    {
        return $this->gtid;
    }

    public function getTiid(): ?int
    {
        return $this->tiid;
    }

    public function setTiid(int $tiid): self
    {
        $this->tiid = $tiid;

        return $this;
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

    public function getEqstid(): ?int
    {
        return $this->eqstid;
    }

    public function setEqstid(int $eqstid): self
    {
        $this->eqstid = $eqstid;

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
