<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeItemmonsterR
 *
 * @ORM\Table(name="xenoblade_itemmonster_r")
 * @ORM\Entity
 */
class XenobladeItemmonsterR
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
     * @ORM\Column(name="moid", type="integer", nullable=false)
     */
    private $moid;

    /**
     * @var int
     *
     * @ORM\Column(name="iid", type="integer", nullable=false)
     */
    private $iid;

    /**
     * @var int
     *
     * @ORM\Column(name="stid", type="integer", nullable=false)
     */
    private $stid;

    /**
     * @var int
     *
     * @ORM\Column(name="eqstid", type="integer", nullable=false)
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

    public function getMoid(): ?int
    {
        return $this->moid;
    }

    public function setMoid(int $moid): self
    {
        $this->moid = $moid;

        return $this;
    }

    public function getIid(): ?int
    {
        return $this->iid;
    }

    public function setIid(int $iid): self
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

    public function setEqstid(int $eqstid): self
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
