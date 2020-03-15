<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeCrystaljewelR
 *
 * @ORM\Table(name="xenoblade_crystaljewel_r")
 * @ORM\Entity
 */
class XenobladeCrystaljewelR
{
    /**
     * @var int
     *
     * @ORM\Column(name="jcid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $jcid;

    /**
     * @var int
     *
     * @ORM\Column(name="crid", type="integer", nullable=false)
     */
    private $crid;

    /**
     * @var int
     *
     * @ORM\Column(name="iid", type="integer", nullable=false)
     */
    private $iid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getJcid(): ?int
    {
        return $this->jcid;
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

    public function getIid(): ?int
    {
        return $this->iid;
    }

    public function setIid(int $iid): self
    {
        $this->iid = $iid;

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
