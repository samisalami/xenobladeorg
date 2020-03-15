<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeMissionconditionItemgroup
 *
 * @ORM\Table(name="xenoblade_missioncondition_itemgroup")
 * @ORM\Entity
 */
class XenobladeMissionconditionItemgroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="mcigid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mcigid;

    /**
     * @var int
     *
     * @ORM\Column(name="iid", type="integer", nullable=false)
     */
    private $iid;

    /**
     * @var int
     *
     * @ORM\Column(name="mid", type="integer", nullable=false)
     */
    private $mid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getMcigid(): ?int
    {
        return $this->mcigid;
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

    public function getMid(): ?int
    {
        return $this->mid;
    }

    public function setMid(int $mid): self
    {
        $this->mid = $mid;

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
