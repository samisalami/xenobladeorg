<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeItemtradeinventoryR
 *
 * @ORM\Table(name="xenoblade_itemtradeinventory_r")
 * @ORM\Entity
 */
class XenobladeItemtradeinventoryR
{
    /**
     * @var int
     *
     * @ORM\Column(name="itiid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itiid;

    /**
     * @var XenobladeTradeinventory | null
     * @ORM\ManyToOne(targetEntity="XenobladeTradeinventory")
     * @ORM\JoinColumn(name="tiid", referencedColumnName="tiid")
     */
    private $tradeInventory;

    /**
     * @var XenobladeItems | null
     * @ORM\ManyToOne(targetEntity="XenobladeItems", inversedBy="tradeRelations")
     * @ORM\JoinColumn(name="iid", referencedColumnName="iid")
     */
    private $item;

    /**
     * @var XenobladeEquipSockettypeR|null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeEquipSockettypeR")
     * @ORM\JoinColumn(name="eqstid", referencedColumnName="eqstid")
     */
    private $equipSockettypeR;

    /**
     * @var int
     *
     * @ORM\Column(name="reqharmony", type="integer", nullable=false)
     */
    private $reqharmony;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getItiid(): ?int
    {
        return $this->itiid;
    }

    public function getTradeInventory(): ?XenobladeTradeinventory
    {
        return $this->tradeInventory;
    }

    public function setTradeInventory(XenobladeTradeinventory $tradeInventory): self
    {
        $this->tradeInventory = $tradeInventory;

        return $this;
    }

    public function getItem(): ?XenobladeItems
    {
        return $this->item;
    }

    public function setItem(XenobladeItems $item): self
    {
        $this->item = $item;

        return $this;
    }

    public function getEquipSockettypeR(): ?XenobladeEquipSockettypeR
    {
        return $this->equipSockettypeR;
    }

    public function setEquipSockettypeR(XenobladeEquipSockettypeR $equipSockettypeR): self
    {
        $this->equipSockettypeR = $equipSockettypeR;

        return $this;
    }

    public function getReqharmony(): ?int
    {
        return $this->reqharmony;
    }

    public function setReqharmony(int $reqharmony): self
    {
        $this->reqharmony = $reqharmony;

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
