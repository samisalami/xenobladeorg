<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class XenobladeSkillbooks
 * @package App\Entity
 * @ORM\Entity()
 */
class XenobladeSkillbooks extends XenobladeItems
{
    /**
     * @var XenobladeSkills
     *
     * @ORM\ManyToOne(targetEntity="XenobladeSkills")
     * @ORM\JoinColumn(name="sid", referencedColumnName="sid")
     */
    private $sid;

    public function getSid(): ?XenobladeSkills
    {
        return $this->sid;
    }

    public function setSid(?XenobladeSkills $sid): self
    {
        $this->sid = $sid;

        return $this;
    }
}