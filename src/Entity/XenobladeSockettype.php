<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var int|null
     *
     * @ORM\Column(name="slot1", type="integer", nullable=true)
     */
    private $slot1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="slot2", type="integer", nullable=true)
     */
    private $slot2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="slot3", type="integer", nullable=true)
     */
    private $slot3;

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

    public function getStid(): ?int
    {
        return $this->stid;
    }

    public function getSlot1(): ?int
    {
        return $this->slot1;
    }

    public function setSlot1(?int $slot1): self
    {
        $this->slot1 = $slot1;

        return $this;
    }

    public function getSlot2(): ?int
    {
        return $this->slot2;
    }

    public function setSlot2(?int $slot2): self
    {
        $this->slot2 = $slot2;

        return $this;
    }

    public function getSlot3(): ?int
    {
        return $this->slot3;
    }

    public function setSlot3(?int $slot3): self
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


}
