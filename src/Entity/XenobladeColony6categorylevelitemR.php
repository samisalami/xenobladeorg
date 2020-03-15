<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeColony6categorylevelitemR
 *
 * @ORM\Table(name="xenoblade_colony6categorylevelitem_r")
 * @ORM\Entity
 */
class XenobladeColony6categorylevelitemR
{
    /**
     * @var int
     *
     * @ORM\Column(name="c6cliid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $c6cliid;

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
     * @var int
     *
     * @ORM\Column(name="c6clid", type="integer", nullable=false)
     */
    private $c6clid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getC6cliid(): ?int
    {
        return $this->c6cliid;
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

    public function getC6clid(): ?int
    {
        return $this->c6clid;
    }

    public function setC6clid(int $c6clid): self
    {
        $this->c6clid = $c6clid;

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
