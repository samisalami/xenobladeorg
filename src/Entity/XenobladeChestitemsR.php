<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeChestitemsR
 *
 * @ORM\Table(name="xenoblade_chestitems_r")
 * @ORM\Entity
 */
class XenobladeChestitemsR
{
    /**
     * @var int
     *
     * @ORM\Column(name="chestitemsid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $chestitemsid;

    /**
     * @var int
     *
     * @ORM\Column(name="iid", type="integer", nullable=false)
     */
    private $iid;

    /**
     * @var int
     *
     * @ORM\Column(name="stid", type="integer", nullable=false)
     */
    private $stid;

    /**
     * @var int
     *
     * @ORM\Column(name="chestid", type="integer", nullable=false)
     */
    private $chestid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getChestitemsid(): ?int
    {
        return $this->chestitemsid;
    }

    public function getIid(): ?int
    {
        return $this->iid;
    }

    public function setIid(int $iid): self
    {
        $this->iid = $iid;

        return $this;
    }

    public function getStid(): ?int
    {
        return $this->stid;
    }

    public function setStid(int $stid): self
    {
        $this->stid = $stid;

        return $this;
    }

    public function getChestid(): ?int
    {
        return $this->chestid;
    }

    public function setChestid(int $chestid): self
    {
        $this->chestid = $chestid;

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
