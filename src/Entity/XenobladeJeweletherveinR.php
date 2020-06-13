<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeJeweletherveinR
 *
 * @ORM\Table(name="xenoblade_jewelethervein_r")
 * @ORM\Entity
 */
class XenobladeJeweletherveinR
{
    /**
     * @var int
     *
     * @ORM\Column(name="jvevid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $jvevid;

    /**
     * @var XenobladeJewels
     *
     * @ORM\ManyToOne(targetEntity="XenobladeJewels", inversedBy="etherVeinRelations")
     * @ORM\JoinColumn(name="iid", referencedColumnName="iid")
     */
    private $jewel;

    /**
     * @var XenobladeEthervein
     * @ORM\ManyToOne(targetEntity="XenobladeEthervein")
     * @ORM\JoinColumn(name="evid", referencedColumnName="evid")
     */
    private $etherVein;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getJvevid(): ?int
    {
        return $this->jvevid;
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

    public function getEtherVein(): ?XenobladeEthervein
    {
        return $this->etherVein;
    }

    public function setEtherVein(XenobladeEthervein $etherVein): self
    {
        $this->etherVein = $etherVein;

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
