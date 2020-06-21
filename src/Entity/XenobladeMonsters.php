<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeMonsters
 *
 * @ORM\Table(name="xenoblade_monsters")
 * @ORM\Entity
 */
class XenobladeMonsters
{
    /**
     * @var int
     *
     * @ORM\Column(name="moid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $moid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="crid", type="integer", nullable=true)
     */
    private $crid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=false)
     */
    private $img;

    /**
     * @var string|null
     *
     * @ORM\Column(name="guide", type="text", length=65535, nullable=true)
     */
    private $guide;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="attacktype", type="string", length=255, nullable=false)
     */
    private $attacktype;

    /**
     * @var int
     *
     * @ORM\Column(name="attack_range", type="integer", nullable=false)
     */
    private $attackRange;

    /**
     * @var int
     *
     * @ORM\Column(name="attack_angle", type="integer", nullable=false)
     */
    private $attackAngle;

    /**
     * @var string
     *
     * @ORM\Column(name="daytime", type="string", length=255, nullable=false)
     */
    private $daytime;

    /**
     * @var string
     *
     * @ORM\Column(name="weather", type="string", length=255, nullable=false)
     */
    private $weather;

    /**
     * @var string
     *
     * @ORM\Column(name="daytime_condition", type="text", length=65535, nullable=false)
     */
    private $daytimeCondition;

    /**
     * @var bool
     *
     * @ORM\Column(name="spoiler", type="boolean", nullable=false)
     */
    private $spoiler = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="storyboss", type="boolean", nullable=false)
     */
    private $storyboss = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="level_from", type="integer", nullable=false)
     */
    private $levelFrom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_to", type="integer", nullable=true)
     */
    private $levelTo;

    /**
     * @var string
     *
     * @ORM\Column(name="bonipointslevel", type="string", length=255, nullable=false)
     */
    private $bonipointslevel;

    /**
     * @var string
     *
     * @ORM\Column(name="prickles", type="string", length=255, nullable=false)
     */
    private $prickles;

    /**
     * @var int
     *
     * @ORM\Column(name="prickles_range", type="integer", nullable=false)
     */
    private $pricklesRange;

    /**
     * @var int
     *
     * @ORM\Column(name="prickles_damage", type="integer", nullable=false)
     */
    private $pricklesDamage;

    /**
     * @var int
     *
     * @ORM\Column(name="prickles_battlestatus", type="integer", nullable=false)
     */
    private $pricklesBattlestatus;

    /**
     * @var int
     *
     * @ORM\Column(name="prickles_battlestatus_chance", type="integer", nullable=false)
     */
    private $pricklesBattlestatusChance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="kp", type="integer", nullable=true)
     */
    private $kp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ep", type="integer", nullable=true)
     */
    private $ep;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tep", type="integer", nullable=true)
     */
    private $tep;

    /**
     * @var int
     *
     * @ORM\Column(name="str", type="integer", nullable=false)
     */
    private $str;

    /**
     * @var int
     *
     * @ORM\Column(name="aeth", type="integer", nullable=false)
     */
    private $aeth;

    /**
     * @var int
     *
     * @ORM\Column(name="agi", type="integer", nullable=false)
     */
    private $agi;

    /**
     * @var int
     *
     * @ORM\Column(name="pha", type="integer", nullable=false)
     */
    private $pha;

    /**
     * @var int
     *
     * @ORM\Column(name="aetha", type="integer", nullable=false)
     */
    private $aetha;

    /**
     * @var string
     *
     * @ORM\Column(name="special_defense", type="string", length=255, nullable=false)
     */
    private $specialDefense;

    /**
     * @var int
     *
     * @ORM\Column(name="doubleattackrate", type="integer", nullable=false)
     */
    private $doubleattackrate;

    /**
     * @var int
     *
     * @ORM\Column(name="critrate", type="integer", nullable=false)
     */
    private $critrate;

    /**
     * @var bool
     *
     * @ORM\Column(name="individual", type="boolean", nullable=false)
     */
    private $individual = '0';

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
     * @ORM\Column(name="motid", type="string", length=255, nullable=false)
     */
    private $motid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getMoid(): ?int
    {
        return $this->moid;
    }

    public function getCrid(): ?int
    {
        return $this->crid;
    }

    public function setCrid(?int $crid): self
    {
        $this->crid = $crid;

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

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getGuide(): ?string
    {
        return $this->guide;
    }

    public function setGuide(?string $guide): self
    {
        $this->guide = $guide;

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

    public function getAttacktype(): ?string
    {
        return $this->attacktype;
    }

    public function setAttacktype(string $attacktype): self
    {
        $this->attacktype = $attacktype;

        return $this;
    }

    public function getAttackRange(): ?int
    {
        return $this->attackRange;
    }

    public function setAttackRange(int $attackRange): self
    {
        $this->attackRange = $attackRange;

        return $this;
    }

    public function getAttackAngle(): ?int
    {
        return $this->attackAngle;
    }

    public function setAttackAngle(int $attackAngle): self
    {
        $this->attackAngle = $attackAngle;

        return $this;
    }

    public function getDaytime(): ?string
    {
        return $this->daytime;
    }

    public function setDaytime(string $daytime): self
    {
        $this->daytime = $daytime;

        return $this;
    }

    public function getWeather(): ?string
    {
        return $this->weather;
    }

    public function setWeather(string $weather): self
    {
        $this->weather = $weather;

        return $this;
    }

    public function getDaytimeCondition(): ?string
    {
        return $this->daytimeCondition;
    }

    public function setDaytimeCondition(string $daytimeCondition): self
    {
        $this->daytimeCondition = $daytimeCondition;

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

    public function getStoryboss(): ?bool
    {
        return $this->storyboss;
    }

    public function setStoryboss(bool $storyboss): self
    {
        $this->storyboss = $storyboss;

        return $this;
    }

    public function getLevelFrom(): ?int
    {
        return $this->levelFrom;
    }

    public function setLevelFrom(int $levelFrom): self
    {
        $this->levelFrom = $levelFrom;

        return $this;
    }

    public function getLevelTo(): ?int
    {
        return $this->levelTo;
    }

    public function setLevelTo(?int $levelTo): self
    {
        $this->levelTo = $levelTo;

        return $this;
    }

    public function getBonipointslevel(): ?string
    {
        return $this->bonipointslevel;
    }

    public function setBonipointslevel(string $bonipointslevel): self
    {
        $this->bonipointslevel = $bonipointslevel;

        return $this;
    }

    public function getPrickles(): ?string
    {
        return $this->prickles;
    }

    public function setPrickles(string $prickles): self
    {
        $this->prickles = $prickles;

        return $this;
    }

    public function getPricklesRange(): ?int
    {
        return $this->pricklesRange;
    }

    public function setPricklesRange(int $pricklesRange): self
    {
        $this->pricklesRange = $pricklesRange;

        return $this;
    }

    public function getPricklesDamage(): ?int
    {
        return $this->pricklesDamage;
    }

    public function setPricklesDamage(int $pricklesDamage): self
    {
        $this->pricklesDamage = $pricklesDamage;

        return $this;
    }

    public function getPricklesBattlestatus(): ?int
    {
        return $this->pricklesBattlestatus;
    }

    public function setPricklesBattlestatus(int $pricklesBattlestatus): self
    {
        $this->pricklesBattlestatus = $pricklesBattlestatus;

        return $this;
    }

    public function getPricklesBattlestatusChance(): ?int
    {
        return $this->pricklesBattlestatusChance;
    }

    public function setPricklesBattlestatusChance(int $pricklesBattlestatusChance): self
    {
        $this->pricklesBattlestatusChance = $pricklesBattlestatusChance;

        return $this;
    }

    public function getKp(): ?int
    {
        return $this->kp;
    }

    public function setKp(?int $kp): self
    {
        $this->kp = $kp;

        return $this;
    }

    public function getEp(): ?int
    {
        return $this->ep;
    }

    public function setEp(?int $ep): self
    {
        $this->ep = $ep;

        return $this;
    }

    public function getTep(): ?int
    {
        return $this->tep;
    }

    public function setTep(?int $tep): self
    {
        $this->tep = $tep;

        return $this;
    }

    public function getStr(): ?int
    {
        return $this->str;
    }

    public function setStr(int $str): self
    {
        $this->str = $str;

        return $this;
    }

    public function getAeth(): ?int
    {
        return $this->aeth;
    }

    public function setAeth(int $aeth): self
    {
        $this->aeth = $aeth;

        return $this;
    }

    public function getAgi(): ?int
    {
        return $this->agi;
    }

    public function setAgi(int $agi): self
    {
        $this->agi = $agi;

        return $this;
    }

    public function getPha(): ?int
    {
        return $this->pha;
    }

    public function setPha(int $pha): self
    {
        $this->pha = $pha;

        return $this;
    }

    public function getAetha(): ?int
    {
        return $this->aetha;
    }

    public function setAetha(int $aetha): self
    {
        $this->aetha = $aetha;

        return $this;
    }

    public function getSpecialDefense(): ?string
    {
        return $this->specialDefense;
    }

    public function setSpecialDefense(string $specialDefense): self
    {
        $this->specialDefense = $specialDefense;

        return $this;
    }

    public function getDoubleattackrate(): ?int
    {
        return $this->doubleattackrate;
    }

    public function setDoubleattackrate(int $doubleattackrate): self
    {
        $this->doubleattackrate = $doubleattackrate;

        return $this;
    }

    public function getCritrate(): ?int
    {
        return $this->critrate;
    }

    public function setCritrate(int $critrate): self
    {
        $this->critrate = $critrate;

        return $this;
    }

    public function getIndividual(): ?bool
    {
        return $this->individual;
    }

    public function setIndividual(bool $individual): self
    {
        $this->individual = $individual;

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

    public function getMotid(): ?string
    {
        return $this->motid;
    }

    public function setMotid(string $motid): self
    {
        $this->motid = $motid;

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
