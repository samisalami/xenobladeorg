<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class XenobladeEtherVeinMapPoints
 * @package App\Entity
 * @ORM\Entity()
 */
class XenobladeEtherVeinMapPoints extends XenobladeMapPoints
{
    /**
     * @var XenobladeEthervein|null
     * @ORM\ManyToOne(targetEntity="XenobladeEthervein")
     * @ORM\JoinColumn(name="typeid", referencedColumnName="evid")
     */
    private $etherVein;

    public function getEtherVein(): ?XenobladeEthervein
    {
        return $this->etherVein;
    }

    public function setEtherVein(XenobladeEthervein $etherVein): self
    {
        $this->etherVein = $etherVein;

        return $this;
    }
}
