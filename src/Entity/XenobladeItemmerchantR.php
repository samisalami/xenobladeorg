<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeItemmerchantR
 *
 * @ORM\Table(name="xenoblade_itemmerchant_r")
 * @ORM\Entity
 */
class XenobladeItemmerchantR
{
    /**
     * @var int
     *
     * @ORM\Column(name="imid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $imid;

    /**
     * @var XenobladeMerchants
     *
     * @ORM\ManyToOne(targetEntity="XenobladeMerchants")
     * @ORM\JoinColumn(name="merid", referencedColumnName="merid")
     */
    private $merchant;

    /**
     * @var XenobladeItems
     *
     * @ORM\ManyToOne(targetEntity="XenobladeItems")
     * @ORM\JoinColumn(name="iid", referencedColumnName="iid")
     */
    private $item;

    /**
     * @var int
     *
     * @ORM\Column(name="stid", type="integer", nullable=false)
     */
    private $stid;

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
     * @ORM\Column(name="costs", type="integer", nullable=false)
     */
    private $costs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getImid(): ?int
    {
        return $this->imid;
    }

    public function getMerchant(): ?XenobladeMerchants
    {
        return $this->merchant;
    }

    public function setMerchant(XenobladeMerchants $merchant): self
    {
        $this->merchant = $merchant;

        return $this;
    }

    public function getItem(): ?XenobladeItems
    {
        return $this->item;
    }

    public function setItem(?XenobladeItems $item): self
    {
        $this->item = $item;

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

    public function getEquipSockettypeR(): ?XenobladeEquipSockettypeR
    {
        return $this->equipSockettypeR;
    }

    public function setEquipSockettypeR(?XenobladeEquipSockettypeR $equipSockettypeR): self
    {
        $this->equipSockettypeR = $equipSockettypeR;

        return $this;
    }

    public function getCosts(): ?int
    {
        return $this->costs;
    }

    public function setCosts(int $costs): self
    {
        $this->costs = $costs;

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
