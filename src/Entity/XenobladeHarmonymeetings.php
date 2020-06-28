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
     * @var XenobladeChapters|null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeChapters")
     * @ORM\JoinColumn(name="cid", referencedColumnName="cid")
     */
    private $chapter;

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
     * @var XenobladeCharacters
     *
     * @ORM\ManyToOne(targetEntity="XenobladeCharacters")
     * @ORM\JoinColumn(name="charid1", referencedColumnName="charid")
     */
    private $person1;

    /**
     * @var XenobladeCharacters
     *
     * @ORM\ManyToOne(targetEntity="XenobladeCharacters")
     * @ORM\JoinColumn(name="charid2", referencedColumnName="charid")
     */
    private $person2;

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

    public function getChapter(): ?XenobladeChapters
    {
        return $this->chapter;
    }

    public function setChapter(XenobladeChapters $chapter): self
    {
        $this->chapter = $chapter;

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

    public function getPerson1(): ?XenobladeCharacters
    {
        return $this->person1;
    }

    public function setPerson1(XenobladeCharacters $person1): self
    {
        $this->person1 = $person1;

        return $this;
    }

    public function getPerson2(): ?XenobladeCharacters
    {
        return $this->person2;
    }

    public function setPerson2(XenobladeCharacters $person2): self
    {
        $this->person2 = $person2;

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
