<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class XenobladePersonMapPoints
 * @package App\Entity
 * @ORM\Entity()
 */
class XenobladePersonMapPoints extends XenobladeMapPoints
{
    /**
     * @var XenobladePersons|null
     * @ORM\ManyToOne(targetEntity="XenobladePersons")
     * @ORM\JoinColumn(name="typeid", referencedColumnName="pid")
     */
    private $person;

    public function getPerson(): ?XenobladePersons
    {
        return $this->person;
    }

    public function setPerson(XenobladePersons $person): self
    {
        $this->person = $person;

        return $this;
    }
}
