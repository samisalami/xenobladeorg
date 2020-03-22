<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class XenobladeJewels
 * @package App\Entity
 * @ORM\Entity()
 */
class XenobladeJewels extends XenobladeItems
{
    /**
     * @var XenobladeJewelvalues
     * @ORM\ManyToOne(targetEntity="XenobladeJewelvalues")
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
}