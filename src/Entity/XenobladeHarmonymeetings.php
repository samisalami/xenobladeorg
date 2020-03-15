<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeHarmonymeetings
 *
 * @ORM\Table(name="xenoblade_harmonymeetings")
 * @ORM\Entity
 */
class XenobladeHarmonymeetings
{
    /**
     * @var int
     *
     * @ORM\Column(name="hmid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $hmid;

    /**
     * @var int
     *
     * @ORM\Column(name="cid", type="integer", nullable=false)
     */
    private $cid;

    /**
     * @var int
     *
     * @ORM\Column(name="scid", type="integer", nullable=false)
     */
    private $scid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="text", length=65535, nullable=false)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="persons", type="string", length=255, nullable=false)
     */
    private $persons;

    /**
     * @var string
     *
     * @ORM\Column(name="required_harmony", type="string", length=255, nullable=false)
     */
    private $requiredHarmony;

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=255, nullable=false)
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="solution", type="text", length=65535, nullable=false)
     */
    private $solution;

    /**
     * @var int
     *
     * @ORM\Column(name="prio", type="integer", nullable=false)
     */
    private $prio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getHmid(): ?int
    {
        return $this->hmid;
    }

    public function getCid(): ?int
    {
        return $this->cid;
    }

    public function setCid(int $cid): self
    {
        $this->cid = $cid;

        return $this;
    }

    public function getScid(): ?int
    {
        return $this->scid;
    }

    public function setScid(int $scid): self
    {
        $this->scid = $scid;

        return $this;
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

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getPersons(): ?string
    {
        return $this->persons;
    }

    public function setPersons(string $persons): self
    {
        $this->persons = $persons;

        return $this;
    }

    public function getRequiredHarmony(): ?string
    {
        return $this->requiredHarmony;
    }

    public function setRequiredHarmony(string $requiredHarmony): self
    {
        $this->requiredHarmony = $requiredHarmony;

        return $this;
    }

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(string $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getSolution(): ?string
    {
        return $this->solution;
    }

    public function setSolution(string $solution): self
    {
        $this->solution = $solution;

        return $this;
    }

    public function getPrio(): ?int
    {
        return $this->prio;
    }

    public function setPrio(int $prio): self
    {
        $this->prio = $prio;

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
