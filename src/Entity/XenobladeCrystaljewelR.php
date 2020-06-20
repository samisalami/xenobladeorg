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
     * @var XenobladeCrystals
     *
     * @ORM\ManyToOne(targetEntity="XenobladeCrystals", inversedBy="jewelRelations")
     * @ORM\JoinColumn(name="crid", referencedColumnName="crid")
     */
    private $crystal;

    /**
     * @var XenobladeJewels
     *
     * @ORM\ManyToOne(targetEntity="XenobladeJewels", inversedBy="crystalRelations")
     * @ORM\JoinColumn(name="iid", referencedColumnName="iid")
     */
    private $jewel;

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

    public function getCrystal(): ?XenobladeCrystals
    {
        return $this->crystal;
    }

    public function setCrystal(XenobladeCrystals $crystal): self
    {
        $this->crystal = $crystal;

        return $this;
    }

    public function getJewel(): ?XenobladeJewels
    {
        return $this->jewel;
    }

    public function setJewel(XenobladeJewels $jewel): self
    {
        $this->jewel = $jewel;

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
