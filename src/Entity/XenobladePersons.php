<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * XenobladePersons
 *
 * @ORM\Table(name="xenoblade_persons")
 * @ORM\Entity
 */
class XenobladePersons
{
    /**
     * @var int
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pid;

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
     * @ORM\Column(name="img", type="string", length=255, nullable=false)
     */
    private $img;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255, nullable=false)
     */
    private $language;

    /**
     * @var bool
     *
     * @ORM\Column(name="gender", type="boolean", nullable=false)
     */
    private $isFemale;

    /**
     * @var string
     *
     * @ORM\Column(name="copy", type="text", length=65535, nullable=false)
     */
    private $copy;

    /**
     * @var XenobladeRaces|null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeRaces")
     * @ORM\JoinColumn(name="rid", referencedColumnName="rid")
     */
    private $race;

    /**
     * @var XenobladeChapters|null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeChapters")
     * @ORM\JoinColumn(name="cid", referencedColumnName="cid")
     */
    private $chapter;

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=255, nullable=false)
     */
    private $time;

    /**
     * @var bool
     *
     * @ORM\Column(name="spoiler", type="boolean", nullable=false)
     */
    private $spoiler = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="story", type="boolean", nullable=false)
     */
    private $story = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="colony6", type="boolean", nullable=false)
     */
    private $colony6 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="colony6description", type="text", length=65535, nullable=true)
     */
    private $colony6description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var XenobladeMissions[]
     * @OneToMany(targetEntity="XenobladeMissions", mappedBy="person")
     */
    private $missions;

    /**
     * @var XenobladePersonMapPoints[]
     * @OneToMany(targetEntity="XenobladePersonMapPoints", mappedBy="person")
     */
    private $mapPoints;

    public function __construct()
    {
        $this->missions = new ArrayCollection();
        $this->mapPoints = new ArrayCollection();
    }

    public function getPid(): ?int
    {
        return $this->pid;
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

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getIsFemale(): ?bool
    {
        return $this->isFemale;
    }

    public function setIsFemale(bool $isFemale): self
    {
        $this->isFemale = $isFemale;

        return $this;
    }

    public function getCopy(): ?string
    {
        return $this->copy;
    }

    public function setCopy(string $copy): self
    {
        $this->copy = $copy;

        return $this;
    }

    public function getRace(): ?XenobladeRaces
    {
        return $this->race;
    }

    public function setRace(XenobladeRaces $race): self
    {
        $this->race = $race;

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

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(string $time): self
    {
        $this->time = $time;

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

    public function getStory(): ?bool
    {
        return $this->story;
    }

    public function setStory(bool $story): self
    {
        $this->story = $story;

        return $this;
    }

    public function getColony6(): ?bool
    {
        return $this->colony6;
    }

    public function setColony6(bool $colony6): self
    {
        $this->colony6 = $colony6;

        return $this;
    }

    public function getColony6description(): ?string
    {
        return $this->colony6description;
    }

    public function setColony6description(?string $colony6description): self
    {
        $this->colony6description = $colony6description;

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

    public function getMissions(): array
    {
        return $this->missions->toArray();
    }

    public function getMapPoints(): array
    {
        return $this->mapPoints->toArray();
    }
}
