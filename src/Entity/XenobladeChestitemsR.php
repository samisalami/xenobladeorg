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
     * @var XenobladeItems
     *
     * @ORM\ManyToOne(targetEntity="XenobladeItems")
     * @ORM\JoinColumn(name="iid", referencedColumnName="iid")
     */
    private $item;

    /**
     * @var XenobladeSockettype | null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeSockettype")
     * @ORM\JoinColumn(name="stid", referencedColumnName="stid")
     */
    private $sockettype;

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

    public function getItem(): XenobladeItems
    {
        return $this->item;
    }

    public function setItem(XenobladeItems $item): self
    {
        $this->item = $item;

        return $this;
    }

    public function getSockettype(): ?XenobladeSockettype
    {
        return $this->sockettype;
    }

    public function setSockettype(XenobladeSockettype $sockettype): self
    {
        $this->sockettype = $sockettype;

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
