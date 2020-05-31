<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * XenobladeItems
 *
 * @ORM\Table(name="xenoblade_items")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="item_type", type="string")
 * @ORM\DiscriminatorMap({
 *      "item" = "XenobladeItems",
        "jewel" = "XenobladeJewels",
        "collectionitem" = "XenobladeCollectionItems",
        "weapon" = "XenobladeWeapons",
        "material" = "XenobladeMaterials",
        "arms" = "XenobladeArms",
        "body" = "XenobladeBodies",
        "feet" = "XenobladeFeet",
        "head" = "XenobladeHeads",
        "important" = "XenobladeImportantItems",
        "legs" = "XenobladeLegs",
        "skillbook" = "XenobladeSkillbooks"
 *     })
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
     * @var XenobladeItemtradeinventoryR[]
     * @OneToMany(targetEntity="XenobladeItemtradeinventoryR", mappedBy="item")
     */
    private $tradeRelations;

    /**
     * @var XenobladeItemcategories
     *
     * @ORM\ManyToOne(targetEntity="XenobladeItemcategories")
     * @ORM\JoinColumn(name="icid", referencedColumnName="icid")
     */
    private $itemcategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

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
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="level", type="string", length=255, nullable=true)
     */
    private $level;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function __construct() {
        $this->tradeRelations = new ArrayCollection();
    }

    public function getIid(): ?int
    {
        return $this->iid;
    }

    public function getItemcategory(): XenobladeItemcategories
    {
        return $this->itemcategory;
    }

    public function setItemcategory(XenobladeItemcategories $itemcategory): self
    {
        $this->itemcategory = $itemcategory;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTradeRelations(): array
    {
        return $this->tradeRelations->toArray();
    }
}

