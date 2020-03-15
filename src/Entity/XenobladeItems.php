<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeItems
 *
 * @ORM\Table(name="xenoblade_items")
 * @ORM\Entity
 */
class XenobladeItems
{
    /**
     * @var int
     *
     * @ORM\Column(name="iid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iid;

    /**
     * @var int
     *
     * @ORM\Column(name="icid", type="integer", nullable=false)
     */
    private $icid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="jvid", type="integer", nullable=true)
     */
    private $jvid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="wert", type="integer", nullable=true)
     */
    private $wert;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sid", type="integer", nullable=true)
     */
    private $sid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="charid", type="integer", nullable=true)
     */
    private $charid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="colid", type="integer", nullable=true)
     */
    private $colid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="motid", type="integer", nullable=true)
     */
    private $motid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="weight", type="string", length=255, nullable=true)
     */
    private $weight;

    /**
     * @var string|null
     *
     * @ORM\Column(name="weighttype", type="string", length=255, nullable=true)
     */
    private $weighttype;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="rare", type="boolean", nullable=true)
     */
    private $rare;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_hidden", type="text", length=65535, nullable=true)
     */
    private $descriptionHidden;

    /**
     * @var string|null
     *
     * @ORM\Column(name="level", type="string", length=255, nullable=true)
     */
    private $level;

    /**
     * @var string|null
     *
     * @ORM\Column(name="autoangriff", type="string", length=255, nullable=true)
     */
    private $autoangriff;

    /**
     * @var int|null
     *
     * @ORM\Column(name="autoangriff_min", type="integer", nullable=true)
     */
    private $autoangriffMin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="autoangriff_max", type="integer", nullable=true)
     */
    private $autoangriffMax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="collectiontype", type="string", length=255, nullable=true)
     */
    private $collectiontype;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="collectionindex", type="boolean", nullable=true)
     */
    private $collectionindex;

    /**
     * @var int|null
     *
     * @ORM\Column(name="c6cclid", type="integer", nullable=true)
     */
    private $c6cclid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="c6count", type="integer", nullable=true)
     */
    private $c6count;

    /**
     * @var int
     *
     * @ORM\Column(name="str", type="integer", nullable=false)
     */
    private $str = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="aeth", type="integer", nullable=false)
     */
    private $aeth = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="agi", type="integer", nullable=false)
     */
    private $agi = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pha", type="integer", nullable=false)
     */
    private $pha = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="aeta", type="integer", nullable=false)
     */
    private $aeta = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="blockrate", type="integer", nullable=false)
     */
    private $blockrate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="kritrate", type="integer", nullable=false)
     */
    private $kritrate = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="jewelattribute", type="string", length=255, nullable=true)
     */
    private $jewelattribute;

    /**
     * @var string|null
     *
     * @ORM\Column(name="jewelchance", type="string", length=255, nullable=true)
     */
    private $jewelchance;

    /**
     * @var string
     *
     * @ORM\Column(name="harmonyshulk", type="string", length=11, nullable=false)
     */
    private $harmonyshulk;

    /**
     * @var string
     *
     * @ORM\Column(name="harmonyreyn", type="string", length=11, nullable=false)
     */
    private $harmonyreyn;

    /**
     * @var string
     *
     * @ORM\Column(name="harmonysharla", type="string", length=11, nullable=false)
     */
    private $harmonysharla;

    /**
     * @var string
     *
     * @ORM\Column(name="harmonydunban", type="string", length=11, nullable=false)
     */
    private $harmonydunban;

    /**
     * @var string
     *
     * @ORM\Column(name="harmonymeli", type="string", length=11, nullable=false)
     */
    private $harmonymeli;

    /**
     * @var string
     *
     * @ORM\Column(name="harmonyriki", type="string", length=11, nullable=false)
     */
    private $harmonyriki;

    /**
     * @var string
     *
     * @ORM\Column(name="harmonyperson7", type="string", length=11, nullable=false)
     */
    private $harmonyperson7;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getIid(): ?int
    {
        return $this->iid;
    }

    public function getIcid(): ?int
    {
        return $this->icid;
    }

    public function setIcid(int $icid): self
    {
        $this->icid = $icid;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getJvid(): ?int
    {
        return $this->jvid;
    }

    public function setJvid(?int $jvid): self
    {
        $this->jvid = $jvid;

        return $this;
    }

    public function getWert(): ?int
    {
        return $this->wert;
    }

    public function setWert(?int $wert): self
    {
        $this->wert = $wert;

        return $this;
    }

    public function getSid(): ?int
    {
        return $this->sid;
    }

    public function setSid(?int $sid): self
    {
        $this->sid = $sid;

        return $this;
    }

    public function getCharid(): ?int
    {
        return $this->charid;
    }

    public function setCharid(?int $charid): self
    {
        $this->charid = $charid;

        return $this;
    }

    public function getColid(): ?int
    {
        return $this->colid;
    }

    public function setColid(?int $colid): self
    {
        $this->colid = $colid;

        return $this;
    }

    public function getMotid(): ?int
    {
        return $this->motid;
    }

    public function setMotid(?int $motid): self
    {
        $this->motid = $motid;

        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(?string $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getWeighttype(): ?string
    {
        return $this->weighttype;
    }

    public function setWeighttype(?string $weighttype): self
    {
        $this->weighttype = $weighttype;

        return $this;
    }

    public function getRare(): ?bool
    {
        return $this->rare;
    }

    public function setRare(?bool $rare): self
    {
        $this->rare = $rare;

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

    public function getDescriptionHidden(): ?string
    {
        return $this->descriptionHidden;
    }

    public function setDescriptionHidden(?string $descriptionHidden): self
    {
        $this->descriptionHidden = $descriptionHidden;

        return $this;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(?string $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getAutoangriff(): ?string
    {
        return $this->autoangriff;
    }

    public function setAutoangriff(?string $autoangriff): self
    {
        $this->autoangriff = $autoangriff;

        return $this;
    }

    public function getAutoangriffMin(): ?int
    {
        return $this->autoangriffMin;
    }

    public function setAutoangriffMin(?int $autoangriffMin): self
    {
        $this->autoangriffMin = $autoangriffMin;

        return $this;
    }

    public function getAutoangriffMax(): ?int
    {
        return $this->autoangriffMax;
    }

    public function setAutoangriffMax(?int $autoangriffMax): self
    {
        $this->autoangriffMax = $autoangriffMax;

        return $this;
    }

    public function getCollectiontype(): ?string
    {
        return $this->collectiontype;
    }

    public function setCollectiontype(?string $collectiontype): self
    {
        $this->collectiontype = $collectiontype;

        return $this;
    }

    public function getCollectionindex(): ?bool
    {
        return $this->collectionindex;
    }

    public function setCollectionindex(?bool $collectionindex): self
    {
        $this->collectionindex = $collectionindex;

        return $this;
    }

    public function getC6cclid(): ?int
    {
        return $this->c6cclid;
    }

    public function setC6cclid(?int $c6cclid): self
    {
        $this->c6cclid = $c6cclid;

        return $this;
    }

    public function getC6count(): ?int
    {
        return $this->c6count;
    }

    public function setC6count(?int $c6count): self
    {
        $this->c6count = $c6count;

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

    public function getAeta(): ?int
    {
        return $this->aeta;
    }

    public function setAeta(int $aeta): self
    {
        $this->aeta = $aeta;

        return $this;
    }

    public function getBlockrate(): ?int
    {
        return $this->blockrate;
    }

    public function setBlockrate(int $blockrate): self
    {
        $this->blockrate = $blockrate;

        return $this;
    }

    public function getKritrate(): ?int
    {
        return $this->kritrate;
    }

    public function setKritrate(int $kritrate): self
    {
        $this->kritrate = $kritrate;

        return $this;
    }

    public function getJewelattribute(): ?string
    {
        return $this->jewelattribute;
    }

    public function setJewelattribute(?string $jewelattribute): self
    {
        $this->jewelattribute = $jewelattribute;

        return $this;
    }

    public function getJewelchance(): ?string
    {
        return $this->jewelchance;
    }

    public function setJewelchance(?string $jewelchance): self
    {
        $this->jewelchance = $jewelchance;

        return $this;
    }

    public function getHarmonyshulk(): ?string
    {
        return $this->harmonyshulk;
    }

    public function setHarmonyshulk(string $harmonyshulk): self
    {
        $this->harmonyshulk = $harmonyshulk;

        return $this;
    }

    public function getHarmonyreyn(): ?string
    {
        return $this->harmonyreyn;
    }

    public function setHarmonyreyn(string $harmonyreyn): self
    {
        $this->harmonyreyn = $harmonyreyn;

        return $this;
    }

    public function getHarmonysharla(): ?string
    {
        return $this->harmonysharla;
    }

    public function setHarmonysharla(string $harmonysharla): self
    {
        $this->harmonysharla = $harmonysharla;

        return $this;
    }

    public function getHarmonydunban(): ?string
    {
        return $this->harmonydunban;
    }

    public function setHarmonydunban(string $harmonydunban): self
    {
        $this->harmonydunban = $harmonydunban;

        return $this;
    }

    public function getHarmonymeli(): ?string
    {
        return $this->harmonymeli;
    }

    public function setHarmonymeli(string $harmonymeli): self
    {
        $this->harmonymeli = $harmonymeli;

        return $this;
    }

    public function getHarmonyriki(): ?string
    {
        return $this->harmonyriki;
    }

    public function setHarmonyriki(string $harmonyriki): self
    {
        $this->harmonyriki = $harmonyriki;

        return $this;
    }

    public function getHarmonyperson7(): ?string
    {
        return $this->harmonyperson7;
    }

    public function setHarmonyperson7(string $harmonyperson7): self
    {
        $this->harmonyperson7 = $harmonyperson7;

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
