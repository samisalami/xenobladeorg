<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * XenobladeChests
 *
 * @ORM\Table(name="xenoblade_chests")
 * @ORM\Entity
 */
class XenobladeChests
{
    /**
     * @var int
     *
     * @ORM\Column(name="chestid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $chestid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="prio", type="integer", nullable=false)
     */
    private $prio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var XenobladeChestitemsR[]
     * @OneToMany(targetEntity="XenobladeChestitemsR", mappedBy="chest")
     */
    private $itemRelationShips;

    public function __construct() {
        $this->itemRelationShips = new ArrayCollection();
    }

    public function getChestid(): ?int
    {
        return $this->chestid;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrio(): ?int
    {
        return $this->prio;
    }

    public function setPrio(int $prio): self
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

    public function getItemRelationShips(): array {
        return $this->itemRelationShips->toArray();
    }

    public function getItems(): array {
        return array_map(function(XenobladeChestitemsR $relation) {
            return $relation->getItem();
        }, $this->itemRelationShips->toArray());
    }
}
