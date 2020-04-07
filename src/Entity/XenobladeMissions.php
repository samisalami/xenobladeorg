<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeMissions
 *
 * @ORM\Table(name="xenoblade_missions")
 * @ORM\Entity
 */
class XenobladeMissions
{
    /**
     * @var int
     *
     * @ORM\Column(name="mid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="solution", type="text", length=65535, nullable=false)
     */
    private $solution;

    /**
     * @var XenobladePersons
     *
     * @ORM\ManyToOne(targetEntity="XenobladePersons")
     * @ORM\JoinColumn(name="pid", referencedColumnName="pid")
     */
    private $person;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255, nullable=false)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=false)
     */
    private $location;

    /**
     * @var XenobladeChapters
     *
     * @ORM\ManyToOne(targetEntity="XenobladeChapters")
     * @ORM\JoinColumn(name="cid", referencedColumnName="cid")
     */
    private $chapter;

    /**
     * @var XenobladeMissions|null
     * @ORM\ManyToOne(targetEntity="XenobladeMissions")
     * @ORM\JoinColumn(name="nextmission", referencedColumnName="mid")
     */
    private $nextmission;

    /**
     * @var bool
     *
     * @ORM\Column(name="startmission", type="boolean", nullable=false)
     */
    private $isStartMission = false;

    /**
     * @var string
     *
     * @ORM\Column(name="ep", type="string", length=255, nullable=false)
     */
    private $ep;

    /**
     * @var string
     *
     * @ORM\Column(name="timelimit", type="string", length=255, nullable=false)
     */
    private $timelimit;

    /**
     * @var string
     *
     * @ORM\Column(name="money", type="string", length=255, nullable=false)
     */
    private $money;

    /**
     * @var string
     *
     * @ORM\Column(name="harmonychange", type="string", length=255, nullable=false)
     */
    private $harmonychange;

    /**
     * @var string
     *
     * @ORM\Column(name="harmonynumber", type="string", length=255, nullable=false)
     */
    private $harmonynumber;

    /**
     * @var bool
     *
     * @ORM\Column(name="skill4", type="boolean")
     */
    private $skill4;

    /**
     * @var bool
     *
     * @ORM\Column(name="skill5", type="boolean")
     */
    private $skill5;

    /**
     * @var int
     *
     * @ORM\Column(name="scid", type="integer", nullable=false)
     */
    private $scid;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_description", type="text", length=65535, nullable=false)
     */
    private $conditionDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="condition_harmony", type="string", length=255, nullable=false)
     */
    private $conditionHarmony;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getMid(): ?int
    {
        return $this->mid;
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

    public function getSolution(): ?string
    {
        return $this->solution;
    }

    public function setSolution(string $solution): self
    {
        $this->solution = $solution;

        return $this;
    }

    public function getPerson(): ?XenobladePersons
    {
        return $this->person;
    }

    public function setPerson(XenobladePersons $person): self
    {
        $this->person = $person;

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

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

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

    public function getNextmission(): ?XenobladeMissions
    {
        return $this->nextmission;
    }

    public function setNextmission(XenobladeMissions $nextmission): self
    {
        $this->nextmission = $nextmission;

        return $this;
    }

    public function getIsStartMission(): ?bool
    {
        return $this->isStartMission;
    }

    public function setIsStartMission(bool $isStartMission): self
    {
        $this->isStartMission = $isStartMission;

        return $this;
    }

    public function getEp(): ?string
    {
        return $this->ep;
    }

    public function setEp(string $ep): self
    {
        $this->ep = $ep;

        return $this;
    }

    public function getTimelimit(): ?string
    {
        return $this->timelimit;
    }

    public function setTimelimit(string $timelimit): self
    {
        $this->timelimit = $timelimit;

        return $this;
    }

    public function getMoney(): ?string
    {
        return $this->money;
    }

    public function setMoney(string $money): self
    {
        $this->money = $money;

        return $this;
    }

    public function getHarmonychange(): ?string
    {
        return $this->harmonychange;
    }

    public function setHarmonychange(string $harmonychange): self
    {
        $this->harmonychange = $harmonychange;

        return $this;
    }

    public function getHarmonynumber(): ?string
    {
        return $this->harmonynumber;
    }

    public function setHarmonynumber(string $harmonynumber): self
    {
        $this->harmonynumber = $harmonynumber;

        return $this;
    }

    public function getSkill4(): ?bool
    {
        return $this->skill4;
    }

    public function setSkill4(bool $skill4): self
    {
        $this->skill4 = $skill4;

        return $this;
    }

    public function getSkill5(): ?bool
    {
        return $this->skill5;
    }

    public function setSkill5(bool $skill5): self
    {
        $this->skill5 = $skill5;

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

    public function getConditionDescription(): ?string
    {
        return $this->conditionDescription;
    }

    public function setConditionDescription(string $conditionDescription): self
    {
        $this->conditionDescription = $conditionDescription;

        return $this;
    }

    public function getConditionHarmony(): ?string
    {
        return $this->conditionHarmony;
    }

    public function setConditionHarmony(string $conditionHarmony): self
    {
        $this->conditionHarmony = $conditionHarmony;

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
