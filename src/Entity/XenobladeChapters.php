<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeChapters
 *
 * @ORM\Table(name="xenoblade_chapters")
 * @ORM\Entity
 */
class XenobladeChapters
{
    /**
     * @var int
     *
     * @ORM\Column(name="cid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false, unique=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=false)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255, nullable=false)
     */
    private $icon;

    /**
     * @var bool
     *
     * @ORM\Column(name="personchapter", type="boolean", nullable=false)
     */
    private $personChapter = false;

    /**
     * @var int
     *
     * @ORM\Column(name="prio", type="integer", nullable=false)
     */
    private $prio;

    /**
     * @var int
     *
     * @ORM\Column(name="hasmap", type="integer", nullable=false, options={"default"="1"})
     */
    private $hasmap = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="missionchapter", type="boolean", nullable=false)
     */
    private $missionChapter = true;

    /**
     * @var string
     *
     * @ORM\Column(name="monster_url", type="string", length=255, nullable=false)
     */
    private $monsterUrl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getCid(): ?int
    {
        return $this->cid;
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

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getPersonChapter(): ?bool
    {
        return $this->personChapter;
    }

    public function setPersonChapter(bool $personChapter): self
    {
        $this->personChapter = $personChapter;

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

    public function getHasmap(): ?int
    {
        return $this->hasmap;
    }

    public function setHasmap(int $hasmap): self
    {
        $this->hasmap = $hasmap;

        return $this;
    }

    public function getMissionChapter(): ?bool
    {
        return $this->missionChapter;
    }

    public function setMissionChapter(bool $missionChapter): self
    {
        $this->missionChapter = $missionChapter;

        return $this;
    }

    public function getMonsterUrl(): ?string
    {
        return $this->monsterUrl;
    }

    public function setMonsterUrl(string $monsterUrl): self
    {
        $this->monsterUrl = $monsterUrl;

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
