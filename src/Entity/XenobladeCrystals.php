<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * XenobladeCrystals
 *
 * @ORM\Table(name="xenoblade_crystals")
 * @ORM\Entity
 */
class XenobladeCrystals
{
    /**
     * @var int
     *
     * @ORM\Column(name="crid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $crid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var XenobladeCrystaljewelR[]
     * @OneToMany(targetEntity="XenobladeCrystaljewelR", mappedBy="crystal")
     */
    private $jewelRelations;

    public function __construct() {
        $this->jewelRelations = new ArrayCollection();
    }

    public function getCrid(): ?int
    {
        return $this->crid;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getJewelRelations(): array
    {
        return $this->jewelRelations->toArray();
    }
}
