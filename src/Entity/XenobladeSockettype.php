<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * XenobladeSockettype
 *
 * @ORM\Table(name="xenoblade_sockettype")
 * @ORM\Entity
 */
class XenobladeSockettype
{
    /**
     * @var int
     *
     * @ORM\Column(name="stid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $stid;

    /**
     * @var XenobladeJewels | null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeJewels", inversedBy="firstSockets")
     * @ORM\JoinColumn(name="slot1", referencedColumnName="iid")
     */
    private $slot1;

    /**
     * @var XenobladeJewels | null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeJewels", inversedBy="secondSockets")
     * @ORM\JoinColumn(name="slot2", referencedColumnName="iid")
     */
    private $slot2;

    /**
     * @var XenobladeJewels | null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeJewels", inversedBy="thirdSockets")
     * @ORM\JoinColumn(name="slot3", referencedColumnName="iid")
     */
    private $slot3;

    /**
     * @var int
     *
     * @ORM\Column(name="empty_slots", type="integer", nullable=false)
     */
    private $emptySlots = 0;

    /**
     * @var bool
     *
     * @ORM\Column(name="notfixed", type="boolean", nullable=false, options={"default"="1"})
     */
    private $notfixed = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var XenobladeEquipSockettypeR[]
     * @OneToMany(targetEntity="XenobladeEquipSockettypeR", mappedBy="sockettype")
     */
    private $equipRelations;

    public function __construct() {
        $this->equipRelations = new ArrayCollection();
    }

    public function getStid(): ?int
    {
        return $this->stid;
    }

    public function getSlot1(): ?XenobladeJewels
    {
        return $this->slot1;
    }

    public function setSlot1(XenobladeJewels $slot1): self
    {
        $this->slot1 = $slot1;

        return $this;
    }

    public function getSlot2(): ?XenobladeJewels
    {
        return $this->slot2;
    }

    public function setSlot2(XenobladeJewels $slot2): self
    {
        $this->slot2 = $slot2;

        return $this;
    }

    public function getSlot3(): ?XenobladeJewels
    {
        return $this->slot3;
    }

    public function setSlot3(XenobladeJewels $slot3): self
    {
        $this->slot3 = $slot3;

        return $this;
    }

    public function getNotfixed(): ?bool
    {
        return $this->notfixed;
    }

    public function setNotfixed(bool $notfixed): self
    {
        $this->notfixed = $notfixed;

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

    public function getEquipRelations(): array
    {
        return $this->equipRelations->toArray();
    }

    public function getEquipRelation(): XenobladeEquipSockettypeR
    {
        return $this->equipRelations->first();
    }

    /**
     * @return int
     */
    public function getEmptySlots(): int
    {
        return $this->emptySlots;
    }

    /**
     * @param int $emptySlots
     * @return XenobladeSockettype
     */
    public function setEmptySlots(int $emptySlots): XenobladeSockettype
    {
        $this->emptySlots = $emptySlots;
        return $this;
    }
}
