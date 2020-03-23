<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class XenobladeMerchantMapPoints
 * @package App\Entity
 * @ORM\Entity()
 */
class XenobladeMerchantMapPoints extends XenobladeMapPoints
{
    /**
     * @var XenobladeMerchants|null
     * @ORM\ManyToOne(targetEntity="XenobladeMerchants")
     * @ORM\JoinColumn(name="typeid", referencedColumnName="merid")
     */
    private $merchant;

    public function getMerchant(): ?XenobladeMerchants
    {
        return $this->merchant;
    }

    public function setMerchant(XenobladeMerchants $merchant): self
    {
        $this->merchant = $merchant;

        return $this;
    }
}
