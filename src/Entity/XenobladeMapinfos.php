<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeMapinfos
 *
 * @ORM\Table(name="xenoblade_mapinfos")
 * @ORM\Entity
 */
class XenobladeMapinfos
{
    /**
     * @var int
     *
     * @ORM\Column(name="mapinfoid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mapinfoid;

    /**
     * @var int
     *
     * @ORM\Column(name="maid", type="integer", nullable=false)
     */
    private $maid;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getMapinfoid(): ?int
    {
        return $this->mapinfoid;
    }

    public function getMaid(): ?int
    {
        return $this->maid;
    }

    public function setMaid(int $maid): self
    {
        $this->maid = $maid;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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
