<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeGlossary
 *
 * @ORM\Table(name="xenoblade_glossary")
 * @ORM\Entity
 */
class XenobladeGlossary
{
    /**
     * @var int
     *
     * @ORM\Column(name="gid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gid;

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
     * @var string
     *
     * @ORM\Column(name="description_spoiler", type="text", length=65535, nullable=false)
     */
    private $descriptionSpoiler;

    /**
     * @var bool
     *
     * @ORM\Column(name="spoiler", type="boolean", nullable=false)
     */
    private $spoiler = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="gamerentry", type="boolean", nullable=false)
     */
    private $gamerentry = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getGid(): ?int
    {
        return $this->gid;
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

    public function getDescriptionSpoiler(): ?string
    {
        return $this->descriptionSpoiler;
    }

    public function setDescriptionSpoiler(string $descriptionSpoiler): self
    {
        $this->descriptionSpoiler = $descriptionSpoiler;

        return $this;
    }

    public function getSpoiler(): ?bool
    {
        return $this->spoiler;
    }

    public function setSpoiler(bool $spoiler): self
    {
        $this->spoiler = $spoiler;

        return $this;
    }

    public function getGamerentry(): ?bool
    {
        return $this->gamerentry;
    }

    public function setGamerentry(bool $gamerentry): self
    {
        $this->gamerentry = $gamerentry;

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
