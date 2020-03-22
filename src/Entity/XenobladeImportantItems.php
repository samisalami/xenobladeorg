<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class XenobladeImportantItems
 * @package App\Entity
 * @ORM\Entity()
 */
class XenobladeImportantItems extends XenobladeItems
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="description_hidden", type="text", length=65535, nullable=true)
     */
    private $descriptionHidden;

    public function getDescriptionHidden(): ?string
    {
        return $this->descriptionHidden;
    }

    public function setDescriptionHidden(?string $descriptionHidden): self
    {
        $this->descriptionHidden = $descriptionHidden;

        return $this;
    }
}