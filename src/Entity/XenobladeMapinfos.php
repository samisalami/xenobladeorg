<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeMapinfos
 *
 * @ORM\Table(name="xenoblade_mapinfos")
 * @ORM\Entity
 */
class XenobladeMapinfos
{
    /**
     * @var int
     *
     * @ORM\Column(name="mapinfoid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mapinfoid;

    /**
     * @var XenobladeMaps|null
     * @ORM\ManyToOne(targetEntity="XenobladeMaps", inversedBy="mapInfos")
     * @ORM\JoinColumn(name="maid", referencedColumnName="maid")
     */
    private $map;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getMapinfoid(): ?int
    {
        return $this->mapinfoid;
    }

    public function getMap(): ?XenobladeMaps
    {
        return $this->map;
    }

    public function setMap(XenobladeMaps $map): self
    {
        $this->map = $map;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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
