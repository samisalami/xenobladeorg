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
     * @var XenobladeCollectionfieldtypes|null
     * @ORM\ManyToOne(targetEntity="XenobladeCollectionfieldtypes")
     * @ORM\JoinColumn(name="field1", referencedColumnName="colftid", nullable=true)
     */
    private $field1CollectionType;

    /**
     * @var XenobladeCollectionfieldtypes|null
     * @ORM\ManyToOne(targetEntity="XenobladeCollectionfieldtypes")
     * @ORM\JoinColumn(name="field2", referencedColumnName="colftid", nullable=true)
     */
    private $field2CollectionType;

    /**
     * @var XenobladeCollectionfieldtypes|null
     * @ORM\ManyToOne(targetEntity="XenobladeCollectionfieldtypes")
     * @ORM\JoinColumn(name="field3", referencedColumnName="colftid", nullable=true)
     */
    private $field3CollectionType;

    /**
     * @var XenobladeCollectionfieldtypes|null
     * @ORM\ManyToOne(targetEntity="XenobladeCollectionfieldtypes")
     * @ORM\JoinColumn(name="field4", referencedColumnName="colftid", nullable=true)
     */
    private $field4CollectionType;

    /**
     * @var XenobladeCollectionfieldtypes|null
     * @ORM\ManyToOne(targetEntity="XenobladeCollectionfieldtypes")
     * @ORM\JoinColumn(name="field5", referencedColumnName="colftid", nullable=true)
     */
    private $field5CollectionType;

    /**
     * @var XenobladeCollectionfieldtypes|null
     * @ORM\ManyToOne(targetEntity="XenobladeCollectionfieldtypes")
     * @ORM\JoinColumn(name="field6", referencedColumnName="colftid", nullable=true)
     */
    private $field6CollectionType;

    /**
     * @var XenobladeChapters|null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeChapters")
     * @ORM\JoinColumn(name="cid", referencedColumnName="cid")
     */
    private $chapter;

    /**
     * @var XenobladeItems|null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeItems", inversedBy="rewardCollections")
     * @ORM\JoinColumn(name="iid", referencedColumnName="iid")
     */
    private $rewardItem;

    /**
     * @var XenobladeSockettype|null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeSockettype")
     * @ORM\JoinColumn(name="stid", referencedColumnName="stid")
     */
    private $rewardSockettype;

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

    public function getField1CollectionType(): ?XenobladeCollectionfieldtypes
    {
        return $this->field1CollectionType;
    }

    public function setField1CollectionType(XenobladeCollectionfieldtypes $field1CollectionType): self
    {
        $this->field1CollectionType = $field1CollectionType;

        return $this;
    }

    public function getField2CollectionType(): ?XenobladeCollectionfieldtypes
    {
        return $this->field2CollectionType;
    }

    public function setField2CollectionType(XenobladeCollectionfieldtypes $field2CollectionType): self
    {
        $this->field2CollectionType = $field2CollectionType;

        return $this;
    }

    public function getField3CollectionType(): ?XenobladeCollectionfieldtypes
    {
        return $this->field3CollectionType;
    }

    public function setField3CollectionType(XenobladeCollectionfieldtypes $field3CollectionType): self
    {
        $this->field3CollectionType = $field3CollectionType;

        return $this;
    }

    public function getField4CollectionType(): ?XenobladeCollectionfieldtypes
    {
        return $this->field4CollectionType;
    }

    public function setField4CollectionType(XenobladeCollectionfieldtypes $field4CollectionType): self
    {
        $this->field4CollectionType = $field4CollectionType;

        return $this;
    }

    public function getField5CollectionType(): ?XenobladeCollectionfieldtypes
    {
        return $this->field5CollectionType;
    }

    public function setField5CollectionType(XenobladeCollectionfieldtypes $field5CollectionType): self
    {
        $this->field5CollectionType = $field5CollectionType;

        return $this;
    }

    public function getField6CollectionType(): ?XenobladeCollectionfieldtypes
    {
        return $this->field6CollectionType;
    }

    public function setField6CollectionType(XenobladeCollectionfieldtypes $field6CollectionType): self
    {
        $this->field6CollectionType = $field6CollectionType;

        return $this;
    }

    public function getChapter(): ?XenobladeChapters
    {
        return $this->chapter;
    }

    public function setChapter(XenobladeChapters $chapter): self
    {
        $this->chapter = $chapter;

        return $this;
    }

    public function getRewardItem(): ?XenobladeItems
    {
        return $this->rewardItem;
    }

    public function setRewardItem(XenobladeItems $rewardItem): self
    {
        $this->rewardItem = $rewardItem;

        return $this;
    }

    public function getRewardSockettype(): ?XenobladeSockettype
    {
        return $this->rewardSockettype;
    }

    public function setRewardSockettype(?XenobladeSockettype $rewardSockettype): self
    {
        $this->rewardSockettype = $rewardSockettype;

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
