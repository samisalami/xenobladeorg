<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class XenobladeMaterials
 * @package App\Entity
 * @ORM\Entity()
 */
class XenobladeMaterials extends XenobladeItems
{
    /**
     * @var bool|null
     *
     * @ORM\Column(name="rare", type="boolean", nullable=true)
     */
    private $rare;

    public function getRare(): ?bool
    {
        return $this->rare;
    }

    public function setRare(?bool $rare): self
    {
        $this->rare = $rare;

        return $this;
    }
}