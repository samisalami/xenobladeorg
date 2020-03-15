<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeMissionconditionPersongroup
 *
 * @ORM\Table(name="xenoblade_missioncondition_persongroup")
 * @ORM\Entity
 */
class XenobladeMissionconditionPersongroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="mcpgid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mcpgid;

    /**
     * @var int
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     */
    private $pid;

    /**
     * @var int
     *
     * @ORM\Column(name="mmcpgid", type="integer", nullable=false)
     */
    private $mmcpgid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getMcpgid(): ?int
    {
        return $this->mcpgid;
    }

    public function getPid(): ?int
    {
        return $this->pid;
    }

    public function setPid(int $pid): self
    {
        $this->pid = $pid;

        return $this;
    }

    public function getMmcpgid(): ?int
    {
        return $this->mmcpgid;
    }

    public function setMmcpgid(int $mmcpgid): self
    {
        $this->mmcpgid = $mmcpgid;

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
