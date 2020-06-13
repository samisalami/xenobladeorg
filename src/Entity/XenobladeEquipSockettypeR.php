<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeEquipSockettypeR
 *
 * @ORM\Table(name="xenoblade_equip_sockettype_r")
 * @ORM\Entity
 */
class XenobladeEquipSockettypeR
{
    /**
     * @var int
     *
     * @ORM\Column(name="eqstid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eqstid;

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
     * @ORM\ManyToOne(targetEntity="XenobladeSockettype", inversedBy="equipRelations")
     * @ORM\JoinColumn(name="stid", referencedColumnName="stid")
     */
    private $sockettype;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getEqstid(): ?int
    {
        return $this->eqstid;
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

    public function getSockettype(): ?XenobladeSockettype
    {
        return $this->sockettype;
    }

    public function setSockettype(XenobladeSockettype $sockettype): self
    {
        $this->sockettype = $sockettype;

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
