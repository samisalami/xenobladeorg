<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeCollectiontypes
 *
 * @ORM\Table(name="xenoblade_collectiontypes")
 * @ORM\Entity
 */
class XenobladeCollectiontypes
{
    /**
     * @var int
     *
     * @ORM\Column(name="coltypeid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coltypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="prio", type="boolean", nullable=false)
     */
    private $prio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getColtypeid(): ?int
    {
        return $this->coltypeid;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrio(): ?bool
    {
        return $this->prio;
    }

    public function setPrio(bool $prio): self
    {
        $this->prio = $prio;

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
