<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeColony6categorieslevelsR
 *
 * @ORM\Table(name="xenoblade_colony6categorieslevels_r")
 * @ORM\Entity
 */
class XenobladeColony6categorieslevelsR
{
    /**
     * @var int
     *
     * @ORM\Column(name="c6cclid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $c6cclid;

    /**
     * @var XenobladeColony6categories
     *
     * @ORM\ManyToOne(targetEntity="XenobladeColony6categories")
     * @ORM\JoinColumn(name="c6cid", referencedColumnName="c6cid", nullable=false)
     */
    private $category;

    /**
     * @var XenobladeColony6categorylevels
     *
     * @ORM\ManyToOne(targetEntity="XenobladeColony6categorylevels")
     * @ORM\JoinColumn(name="c6clid", referencedColumnName="c6clid", nullable=false)
     */
    private $categoryLevel;

    /**
     * @var int
     *
     * @ORM\Column(name="costs", type="integer", nullable=false)
     */
    private $costs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getC6cclid(): ?int
    {
        return $this->c6cclid;
    }

    public function getCategory(): ?XenobladeColony6categories
    {
        return $this->category;
    }

    public function setCategory(XenobladeColony6categories $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getCategoryLevel(): ?XenobladeColony6categorylevels
    {
        return $this->categoryLevel;
    }

    public function setCategoryLevel(XenobladeColony6categorylevels $categoryLevel): self
    {
        $this->categoryLevel = $categoryLevel;

        return $this;
    }

    public function getCosts(): ?int
    {
        return $this->costs;
    }

    public function setCosts(int $costs): self
    {
        $this->costs = $costs;

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
