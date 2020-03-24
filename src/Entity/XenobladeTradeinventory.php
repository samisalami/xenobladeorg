<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeTradeinventory
 *
 * @ORM\Table(name="xenoblade_tradeinventory")
 * @ORM\Entity
 */
class XenobladeTradeinventory
{
    /**
     * @var int
     *
     * @ORM\Column(name="tiid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tiid;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var XenobladePersons | null
     * @ORM\ManyToOne(targetEntity="XenobladePersons")
     * @ORM\JoinColumn(name="pid", referencedColumnName="pid")
     */
    private $person;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getTiid(): ?int
    {
        return $this->tiid;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPerson(): ?XenobladePersons
    {
        return $this->person;
    }

    public function setPerson(XenobladePersons $person): self
    {
        $this->person = $person;

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
