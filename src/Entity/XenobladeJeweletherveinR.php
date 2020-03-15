<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeJeweletherveinR
 *
 * @ORM\Table(name="xenoblade_jewelethervein_r")
 * @ORM\Entity
 */
class XenobladeJeweletherveinR
{
    /**
     * @var int
     *
     * @ORM\Column(name="jvevid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $jvevid;

    /**
     * @var int
     *
     * @ORM\Column(name="iid", type="integer", nullable=false)
     */
    private $iid;

    /**
     * @var int
     *
     * @ORM\Column(name="evid", type="integer", nullable=false)
     */
    private $evid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getJvevid(): ?int
    {
        return $this->jvevid;
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

    public function getEvid(): ?int
    {
        return $this->evid;
    }

    public function setEvid(int $evid): self
    {
        $this->evid = $evid;

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
