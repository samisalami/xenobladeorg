<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * XenobladeJewelvalues
 *
 * @ORM\Table(name="xenoblade_jewelvalues")
 * @ORM\Entity
 */
class XenobladeJewelvalues
{
    /**
     * @var int
     *
     * @ORM\Column(name="jvid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $jvid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var XenobladeElements
     * @ORM\ManyToOne(targetEntity="XenobladeElements")
     * @ORM\JoinColumn(name="elementid", referencedColumnName="elementid")
     */
    private $element;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="maxvalue", type="string", length=255, nullable=false)
     */
    private $maxvalue;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var bool
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="duration", type="string", length=255, nullable=true)
     */
    private $duration;

    /**
     * @var XenobladeJewels[]
     * @OneToMany(targetEntity="XenobladeJewels", mappedBy="jewelValue")
     * @ORM\OrderBy({"level" = "ASC"})
     */
    private $jewels;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function __construct()
    {
        $this->jewels = new ArrayCollection();
    }

    public function getJvid(): ?int
    {
        return $this->jvid;
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

    public function getElement(): ?XenobladeElements
    {
        return $this->element;
    }

    public function setElement(XenobladeElements $element): self
    {
        $this->element = $element;

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

    public function getMaxvalue(): ?string
    {
        return $this->maxvalue;
    }

    public function setMaxvalue(string $maxvalue): self
    {
        $this->maxvalue = $maxvalue;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getType(): ?bool
    {
        return $this->type;
    }

    public function setType(bool $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(?string $duration): self
    {
        $this->duration = $duration;

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

    public function getJewels(): array
    {
        return $this->jewels->toArray();
    }
}
