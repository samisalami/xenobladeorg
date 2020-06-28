<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeSkills
 *
 * @ORM\Table(name="xenoblade_skills")
 * @ORM\Entity
 */
class XenobladeSkills
{
    /**
     * @var int
     *
     * @ORM\Column(name="sid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sid;

    /**
     * @var XenobladeCharacters
     *
     * @ORM\ManyToOne(targetEntity="XenobladeCharacters")
     * @ORM\JoinColumn(name="charid", referencedColumnName="charid")
     */
    private $character;

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
     * @var int
     *
     * @ORM\Column(name="getatlv", type="integer", nullable=false)
     */
    private $getatlv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="getatlv_special", type="text", length=65535, nullable=true)
     */
    private $getatlvSpecial;

    /**
     * @var string
     *
     * @ORM\Column(name="condition1", type="string", length=255, nullable=false)
     */
    private $condition1;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=false)
     */
    private $img;

    /**
     * @var int
     *
     * @ORM\Column(name="prio", type="integer", nullable=false)
     */
    private $prio;

    /**
     * @var int
     *
     * @ORM\Column(name="tep2", type="integer", nullable=false)
     */
    private $tep2;

    /**
     * @var int
     *
     * @ORM\Column(name="tep3", type="integer", nullable=false)
     */
    private $tep3;

    /**
     * @var int
     *
     * @ORM\Column(name="tep4", type="integer", nullable=false)
     */
    private $tep4;

    /**
     * @var int
     *
     * @ORM\Column(name="tep5", type="integer", nullable=false)
     */
    private $tep5;

    /**
     * @var int
     *
     * @ORM\Column(name="tep6", type="integer", nullable=false)
     */
    private $tep6;

    /**
     * @var int
     *
     * @ORM\Column(name="tep7", type="integer", nullable=false)
     */
    private $tep7;

    /**
     * @var int
     *
     * @ORM\Column(name="tep8", type="integer", nullable=false)
     */
    private $tep8;

    /**
     * @var int
     *
     * @ORM\Column(name="tep9", type="integer", nullable=false)
     */
    private $tep9;

    /**
     * @var int
     *
     * @ORM\Column(name="tep10", type="integer", nullable=false)
     */
    private $tep10;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getSid(): ?int
    {
        return $this->sid;
    }

    public function getCharacter(): ?XenobladeCharacters
    {
        return $this->character;
    }

    public function setCharacter(XenobladeCharacters $character): self
    {
        $this->character = $character;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getGetatlv(): ?int
    {
        return $this->getatlv;
    }

    public function setGetatlv(int $getatlv): self
    {
        $this->getatlv = $getatlv;

        return $this;
    }

    public function getGetatlvSpecial(): ?string
    {
        return $this->getatlvSpecial;
    }

    public function setGetatlvSpecial(?string $getatlvSpecial): self
    {
        $this->getatlvSpecial = $getatlvSpecial;

        return $this;
    }

    public function getCondition1(): ?string
    {
        return $this->condition1;
    }

    public function setCondition1(string $condition1): self
    {
        $this->condition1 = $condition1;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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

    public function getMonster(): ?bool
    {
        return $this->monster;
    }

    public function setMonster(bool $monster): self
    {
        $this->monster = $monster;

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

    public function getTep2(): ?int
    {
        return $this->tep2;
    }

    public function setTep2(int $tep2): self
    {
        $this->tep2 = $tep2;

        return $this;
    }

    public function getTep3(): ?int
    {
        return $this->tep3;
    }

    public function setTep3(int $tep3): self
    {
        $this->tep3 = $tep3;

        return $this;
    }

    public function getTep4(): ?int
    {
        return $this->tep4;
    }

    public function setTep4(int $tep4): self
    {
        $this->tep4 = $tep4;

        return $this;
    }

    public function getTep5(): ?int
    {
        return $this->tep5;
    }

    public function setTep5(int $tep5): self
    {
        $this->tep5 = $tep5;

        return $this;
    }

    public function getTep6(): ?int
    {
        return $this->tep6;
    }

    public function setTep6(int $tep6): self
    {
        $this->tep6 = $tep6;

        return $this;
    }

    public function getTep7(): ?int
    {
        return $this->tep7;
    }

    public function setTep7(int $tep7): self
    {
        $this->tep7 = $tep7;

        return $this;
    }

    public function getTep8(): ?int
    {
        return $this->tep8;
    }

    public function setTep8(int $tep8): self
    {
        $this->tep8 = $tep8;

        return $this;
    }

    public function getTep9(): ?int
    {
        return $this->tep9;
    }

    public function setTep9(int $tep9): self
    {
        $this->tep9 = $tep9;

        return $this;
    }

    public function getTep10(): ?int
    {
        return $this->tep10;
    }

    public function setTep10(int $tep10): self
    {
        $this->tep10 = $tep10;

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
