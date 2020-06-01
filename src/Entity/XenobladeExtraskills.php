<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeExtraskills
 *
 * @ORM\Table(name="xenoblade_extraskills")
 * @ORM\Entity
 */
class XenobladeExtraskills
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="esid", type="integer", nullable=false)
     */
    private $esid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var XenobladeMissions
     *
     * @ORM\ManyToOne(targetEntity="XenobladeMissions", inversedBy="extraSkills")
     * @ORM\JoinColumn(name="mid", referencedColumnName="mid")
     */
    private $mission;

    /**
     * @var XenobladeCharacters
     *
     * @ORM\ManyToOne(targetEntity="XenobladeCharacters")
     * @ORM\JoinColumn(name="charid", referencedColumnName="charid")
     */
    private $character;

    /**
     * @var bool
     *
     * @ORM\Column(name="skill4", type="boolean", nullable=false)
     */
    private $skill4 = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="skill5", type="boolean", nullable=false)
     */
    private $skill5 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEsid(): ?int
    {
        return $this->esid;
    }

    public function setEsid(int $esid): self
    {
        $this->esid = $esid;

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

    public function getMission(): ?XenobladeMissions
    {
        return $this->mission;
    }

    public function setMission(XenobladeMissions $mission): self
    {
        $this->mission = $mission;

        return $this;
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
