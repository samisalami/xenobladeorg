<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeColony6levelitemR
 *
 * @ORM\Table(name="xenoblade_colony6levelitem_r")
 * @ORM\Entity
 */
class XenobladeColony6levelitemR
{
    /**
     * @var int
     *
     * @ORM\Column(name="c6liid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $c6liid;

    /**
     * @var XenobladeItems|null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeItems")
     * @ORM\JoinColumn(name="iid", referencedColumnName="iid")
     */
    private $item;

    /**
     * @var XenobladeColony6categorieslevelsR
     *
     * @ORM\ManyToOne(targetEntity="XenobladeColony6categorieslevelsR")
     * @ORM\JoinColumn(name="c6cclid", referencedColumnName="c6cclid", nullable=false)
     */
    private $categoryLevelLink;

    /**
     * @var int
     *
     * @ORM\Column(name="itemcount", type="integer", nullable=false)
     */
    private $itemcount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getC6liid(): ?int
    {
        return $this->c6liid;
    }

    public function getItem(): ?XenobladeItems
    {
        return $this->item;
    }

    public function setItem(XenobladeItems $item): self
    {
        $this->item = $item;

        return $this;
    }

    public function getCategoryLevelLink(): ?XenobladeColony6categorieslevelsR
    {
        return $this->categoryLevelLink;
    }

    public function setCategoryLevelLink(XenobladeColony6categorieslevelsR $categoryLevelLink): self
    {
        $this->categoryLevelLink = $categoryLevelLink;

        return $this;
    }

    public function getItemcount(): ?int
    {
        return $this->itemcount;
    }

    public function setItemcount(int $itemcount): self
    {
        $this->itemcount = $itemcount;

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
