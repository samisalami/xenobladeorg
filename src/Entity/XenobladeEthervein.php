<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * XenobladeEthervein
 *
 * @ORM\Table(name="xenoblade_ethervein")
 * @ORM\Entity
 */
class XenobladeEthervein
{
    /**
     * @var int
     *
     * @ORM\Column(name="evid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $evid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="rare", type="boolean", nullable=false)
     */
    private $rare;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255, nullable=false)
     */
    private $level;

    /**
     * @var int
     *
     * @ORM\Column(name="elementid", type="integer", nullable=false)
     */
    private $elementid;

    /**
     * @var int
     *
     * @ORM\Column(name="regenerationtime", type="integer", nullable=false)
     */
    private $regenerationtime;

    /**
     * @var string
     *
     * @ORM\Column(name="collectcount", type="string", length=255, nullable=false)
     */
    private $collectcount;

    /**
     * @var int
     *
     * @ORM\Column(name="collectionpoints", type="integer", nullable=false)
     */
    private $collectionpoints;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var XenobladeEtherVeinMapPoints[]
     * @OneToMany(targetEntity="XenobladeEtherVeinMapPoints", mappedBy="etherVein")
     */
    private $mapPoints;

    public function __construct() {
        $this->mapPoints = new ArrayCollection();
    }

    public function getEvid(): ?int
    {
        return $this->evid;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getRare(): ?bool
    {
        return $this->rare;
    }

    public function setRare(bool $rare): self
    {
        $this->rare = $rare;

        return $this;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(string $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getElementid(): ?int
    {
        return $this->elementid;
    }

    public function setElementid(int $elementid): self
    {
        $this->elementid = $elementid;

        return $this;
    }

    public function getRegenerationtime(): ?int
    {
        return $this->regenerationtime;
    }

    public function setRegenerationtime(int $regenerationtime): self
    {
        $this->regenerationtime = $regenerationtime;

        return $this;
    }

    public function getCollectcount(): ?string
    {
        return $this->collectcount;
    }

    public function setCollectcount(string $collectcount): self
    {
        $this->collectcount = $collectcount;

        return $this;
    }

    public function getCollectionpoints(): ?int
    {
        return $this->collectionpoints;
    }

    public function setCollectionpoints(int $collectionpoints): self
    {
        $this->collectionpoints = $collectionpoints;

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

    public function getMapPoints(): array
    {
        return $this->mapPoints->toArray();
    }
}
