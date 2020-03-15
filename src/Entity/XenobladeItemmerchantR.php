<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeItemmerchantR
 *
 * @ORM\Table(name="xenoblade_itemmerchant_r")
 * @ORM\Entity
 */
class XenobladeItemmerchantR
{
    /**
     * @var int
     *
     * @ORM\Column(name="imid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $imid;

    /**
     * @var int
     *
     * @ORM\Column(name="merid", type="integer", nullable=false)
     */
    private $merid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="iid", type="integer", nullable=true)
     */
    private $iid;

    /**
     * @var int
     *
     * @ORM\Column(name="stid", type="integer", nullable=false)
     */
    private $stid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="eqstid", type="integer", nullable=true)
     */
    private $eqstid;

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

    public function getImid(): ?int
    {
        return $this->imid;
    }

    public function getMerid(): ?int
    {
        return $this->merid;
    }

    public function setMerid(int $merid): self
    {
        $this->merid = $merid;

        return $this;
    }

    public function getIid(): ?int
    {
        return $this->iid;
    }

    public function setIid(?int $iid): self
    {
        $this->iid = $iid;

        return $this;
    }

    public function getStid(): ?int
    {
        return $this->stid;
    }

    public function setStid(int $stid): self
    {
        $this->stid = $stid;

        return $this;
    }

    public function getEqstid(): ?int
    {
        return $this->eqstid;
    }

    public function setEqstid(?int $eqstid): self
    {
        $this->eqstid = $eqstid;

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
