<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class XenobladeStoryNoteMapPoints
 * @package App\Entity
 * @ORM\Entity()
 */
class XenobladeStoryNoteMapPoints extends XenobladeMapPoints
{
    /**
     * @var XenobladeStorynote|null
     * @ORM\ManyToOne(targetEntity="XenobladeStorynote")
     * @ORM\JoinColumn(name="typeid", referencedColumnName="storynoteid")
     */
    private $storyNote;

    public function getStoryNote(): ?XenobladeStorynote
    {
        return $this->storyNote;
    }

    public function setStoryNote(XenobladeStorynote $storyNote): self
    {
        $this->storyNote = $storyNote;

        return $this;
    }
}
