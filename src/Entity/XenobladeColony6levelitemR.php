<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeColony6levelitemR
 *
 * @ORM\Table(name="xenoblade_colony6levelitem_r")
 * @ORM\Entity
 */
class XenobladeColony6levelitemR
{
    /**
     * @var int
     *
     * @ORM\Column(name="c6liid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $c6liid;

    /**
     * @var int
     *
     * @ORM\Column(name="iid", type="integer", nullable=false)
     */
    private $iid;

    /**
     * @var int
     *
     * @ORM\Column(name="c6cclid", type="integer", nullable=false)
     */
    private $c6cclid;

    /**
     * @var int
     *
     * @ORM\Column(name="itemcount", type="integer", nullable=false)
     */
    private $itemcount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getC6liid(): ?int
    {
        return $this->c6liid;
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

    public function getC6cclid(): ?int
    {
        return $this->c6cclid;
    }

    public function setC6cclid(int $c6cclid): self
    {
        $this->c6cclid = $c6cclid;

        return $this;
    }

    public function getItemcount(): ?int
    {
        return $this->itemcount;
    }

    public function setItemcount(int $itemcount): self
    {
        $this->itemcount = $itemcount;

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
