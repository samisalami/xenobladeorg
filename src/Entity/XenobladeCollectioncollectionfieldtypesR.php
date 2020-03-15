<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeCollectioncollectionfieldtypesR
 *
 * @ORM\Table(name="xenoblade_collectioncollectionfieldtypes_r")
 * @ORM\Entity
 */
class XenobladeCollectioncollectionfieldtypesR
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="colid", type="integer", nullable=false)
     */
    private $colid;

    /**
     * @var int
     *
     * @ORM\Column(name="colftid", type="integer", nullable=false)
     */
    private $colftid;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getColid(): ?int
    {
        return $this->colid;
    }

    public function setColid(int $colid): self
    {
        $this->colid = $colid;

        return $this;
    }

    public function getColftid(): ?int
    {
        return $this->colftid;
    }

    public function setColftid(int $colftid): self
    {
        $this->colftid = $colftid;

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
