<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeItemmissionR
 *
 * @ORM\Table(name="xenoblade_itemmission_r")
 * @ORM\Entity
 */
class XenobladeItemmissionR
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
     * @ORM\Column(name="mid", type="integer", nullable=false)
     */
    private $mid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="iid", type="integer", nullable=true)
     */
    private $iid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="eqstid", type="integer", nullable=true)
     */
    private $eqstid;

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

    public function getMid(): ?int
    {
        return $this->mid;
    }

    public function setMid(int $mid): self
    {
        $this->mid = $mid;

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

    public function getEqstid(): ?int
    {
        return $this->eqstid;
    }

    public function setEqstid(?int $eqstid): self
    {
        $this->eqstid = $eqstid;

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
