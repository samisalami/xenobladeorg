<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class XenobladeWeapons
 * @package App\Entity
 * @ORM\Entity()
 */
class XenobladeWeapons extends XenobladeItems
{
    /**
     * @var XenobladeCharacters
     *
     * @ORM\ManyToOne(targetEntity="XenobladeCharacters")
     * @ORM\JoinColumn(name="charid", referencedColumnName="charid")
     */
    private $character;

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

    public function getCharacter(): ?XenobladeCharacters
    {
        return $this->character;
    }

    public function setCharacter(?XenobladeCharacters $character): self
    {
        $this->character = $character;

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
}