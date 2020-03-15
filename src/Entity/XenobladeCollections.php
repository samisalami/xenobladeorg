<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeCollections
 *
 * @ORM\Table(name="xenoblade_collections")
 * @ORM\Entity
 */
class XenobladeCollections
{
    /**
     * @var int
     *
     * @ORM\Column(name="colid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $colid;

    /**
     * @var string
     *
     * @ORM\Column(name="field1", type="string", length=255, nullable=false)
     */
    private $field1;

    /**
     * @var string
     *
     * @ORM\Column(name="field2", type="string", length=255, nullable=false)
     */
    private $field2;

    /**
     * @var string
     *
     * @ORM\Column(name="field3", type="string", length=255, nullable=false)
     */
    private $field3;

    /**
     * @var string
     *
     * @ORM\Column(name="field4", type="string", length=255, nullable=false)
     */
    private $field4;

    /**
     * @var string
     *
     * @ORM\Column(name="field5", type="string", length=255, nullable=false)
     */
    private $field5;

    /**
     * @var string
     *
     * @ORM\Column(name="field6", type="string", length=255, nullable=false)
     */
    private $field6;

    /**
     * @var int
     *
     * @ORM\Column(name="cid", type="integer", nullable=false)
     */
    private $cid;

    /**
     * @var int
     *
     * @ORM\Column(name="iid", type="integer", nullable=false)
     */
    private $iid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stid", type="integer", nullable=true)
     */
    private $stid;

    /**
     * @var int
     *
     * @ORM\Column(name="prio", type="integer", nullable=false)
     */
    private $prio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getColid(): ?int
    {
        return $this->colid;
    }

    public function getField1(): ?string
    {
        return $this->field1;
    }

    public function setField1(string $field1): self
    {
        $this->field1 = $field1;

        return $this;
    }

    public function getField2(): ?string
    {
        return $this->field2;
    }

    public function setField2(string $field2): self
    {
        $this->field2 = $field2;

        return $this;
    }

    public function getField3(): ?string
    {
        return $this->field3;
    }

    public function setField3(string $field3): self
    {
        $this->field3 = $field3;

        return $this;
    }

    public function getField4(): ?string
    {
        return $this->field4;
    }

    public function setField4(string $field4): self
    {
        $this->field4 = $field4;

        return $this;
    }

    public function getField5(): ?string
    {
        return $this->field5;
    }

    public function setField5(string $field5): self
    {
        $this->field5 = $field5;

        return $this;
    }

    public function getField6(): ?string
    {
        return $this->field6;
    }

    public function setField6(string $field6): self
    {
        $this->field6 = $field6;

        return $this;
    }

    public function getCid(): ?int
    {
        return $this->cid;
    }

    public function setCid(int $cid): self
    {
        $this->cid = $cid;

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

    public function setStid(?int $stid): self
    {
        $this->stid = $stid;

        return $this;
    }

    public function getPrio(): ?int
    {
        return $this->prio;
    }

    public function setPrio(int $prio): self
    {
        $this->prio = $prio;

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
