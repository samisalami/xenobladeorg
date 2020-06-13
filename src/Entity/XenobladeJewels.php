<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Class XenobladeJewels
 * @package App\Entity
 * @ORM\Entity()
 */
class XenobladeJewels extends XenobladeItems
{
    /**
     * @var XenobladeJewelvalues
     * @ORM\ManyToOne(targetEntity="XenobladeJewelvalues", inversedBy="jewels")
     * @ORM\JoinColumn(name="jvid", referencedColumnName="jvid")
     */
    private $jewelValue;

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
     * @var string|null
     *
     * @ORM\Column(name="level", type="string", length=255, nullable=true)
     */
    private $level;

    /**
     * @var XenobladeJeweletherveinR[]
     * @OneToMany(targetEntity="XenobladeJeweletherveinR", mappedBy="jewel")
     */
    private $etherVeinRelations;

    /**
     * @var XenobladeCrystaljewelR[]
     * @OneToMany(targetEntity="XenobladeCrystaljewelR", mappedBy="jewel")
     */
    private $crystalRelations;

    /**
     * @var XenobladeSockettype[]
     * @OneToMany(targetEntity="XenobladeSockettype", mappedBy="slot1")
     */
    private $firstSockets;

    /**
     * @var XenobladeSockettype[]
     * @OneToMany(targetEntity="XenobladeSockettype", mappedBy="slot2")
     */
    private $secondSockets;

    /**
     * @var XenobladeSockettype[]
     * @OneToMany(targetEntity="XenobladeSockettype", mappedBy="slot3")
     */
    private $thirdSockets;

    public function __construct() {
        parent::__construct();
        $this->etherVeinRelations = new ArrayCollection();
        $this->crystalRelations = new ArrayCollection();
        $this->firstSockets = new ArrayCollection();
        $this->secondSockets = new ArrayCollection();
        $this->thirdSockets = new ArrayCollection();
    }

    public function getJewelValue(): XenobladeJewelvalues
    {
        return $this->jewelValue;
    }

    public function setJewelValue(XenobladeJewelvalues $jewelValue): self
    {
        $this->jewelValue = $jewelValue;

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

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(?string $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getEtherVeinRelations(): array
    {
        return $this->etherVeinRelations->toArray();
    }

    public function getCrystalRelations(): array
    {
        return $this->crystalRelations->toArray();
    }

    public function getSockets(): array
    {
        $sockets = $this->firstSockets->toArray();
        $sockets = array_merge($sockets, $this->secondSockets->toArray());
        $sockets = array_merge($sockets, $this->thirdSockets->toArray());
        return $sockets;
    }
}