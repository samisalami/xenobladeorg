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
     * @var int
     *
     * @ORM\Column(name="c6cid", type="integer", nullable=false)
     */
    private $c6cid;

    /**
     * @var int
     *
     * @ORM\Column(name="c6clid", type="integer", nullable=false)
     */
    private $c6clid;

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

    public function getC6cid(): ?int
    {
        return $this->c6cid;
    }

    public function setC6cid(int $c6cid): self
    {
        $this->c6cid = $c6cid;

        return $this;
    }

    public function getC6clid(): ?int
    {
        return $this->c6clid;
    }

    public function setC6clid(int $c6clid): self
    {
        $this->c6clid = $c6clid;

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
