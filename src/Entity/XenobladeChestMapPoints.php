<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class XenobladeChestMapPoints
 * @package App\Entity
 * @ORM\Entity()
 */
class XenobladeChestMapPoints extends XenobladeMapPoints
{
    /**
     * @var XenobladeChests|null
     * @ORM\ManyToOne(targetEntity="XenobladeChests")
     * @ORM\JoinColumn(name="typeid", referencedColumnName="chestid")
     */
    private $chest;

    public function getChest(): ?XenobladeChests
    {
        return $this->chest;
    }

    public function setChest(XenobladeChests $chest): self
    {
        $this->chest = $chest;

        return $this;
    }
}
