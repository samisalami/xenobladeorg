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
     * @var XenobladeCollections|null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeCollections")
     * @ORM\JoinColumn(name="colid", referencedColumnName="colid")
     */
    private $collection;

    /**
     * @var XenobladeCollectionfieldtypes|null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeCollectionfieldtypes")
     * @ORM\JoinColumn(name="colftid", referencedColumnName="colftid")
     */
    private $collectionRow;

    /**
     * @var XenobladeItems|null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeItems", inversedBy="collectionRowRelations")
     * @ORM\JoinColumn(name="iid", referencedColumnName="iid")
     */
    private $item;

    /**
     * @var XenobladeSockettype|null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeSockettype")
     * @ORM\JoinColumn(name="stid", referencedColumnName="stid")
     */
    private $rewardSocketType;

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

    public function getCollection(): ?XenobladeCollections
    {
        return $this->collection;
    }

    public function setCollection(XenobladeCollections $collection): self
    {
        $this->collection = $collection;

        return $this;
    }

    public function getCollectionRow(): ?XenobladeCollectionfieldtypes
    {
        return $this->collectionRow;
    }

    public function setCollectionRow(XenobladeCollectionfieldtypes $collectionRow): self
    {
        $this->collectionRow = $collectionRow;

        return $this;
    }

    public function getItem(): ?XenobladeItems
    {
        return $this->item;
    }

    public function setItem(XenobladeItems $item): self
    {
        $this->item = $item;

        return $this;
    }

    public function getRewardSocketType(): ?XenobladeSockettype
    {
        return $this->rewardSocketType;
    }

    public function setRewardSocketType(XenobladeSockettype $rewardSocketType): self
    {
        $this->rewardSocketType = $rewardSocketType;

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
