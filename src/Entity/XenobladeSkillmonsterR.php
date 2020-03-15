<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeSkillmonsterR
 *
 * @ORM\Table(name="xenoblade_skillmonster_r")
 * @ORM\Entity
 */
class XenobladeSkillmonsterR
{
    /**
     * @var int
     *
     * @ORM\Column(name="sidmoid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sidmoid;

    /**
     * @var int
     *
     * @ORM\Column(name="sid", type="integer", nullable=false)
     */
    private $sid;

    /**
     * @var int
     *
     * @ORM\Column(name="moid", type="integer", nullable=false)
     */
    private $moid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getSidmoid(): ?int
    {
        return $this->sidmoid;
    }

    public function getSid(): ?int
    {
        return $this->sid;
    }

    public function setSid(int $sid): self
    {
        $this->sid = $sid;

        return $this;
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
