<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class XenobladeCollectionItems
 * @package App\Entity
 * @ORM\Entity()
 */
class XenobladeCollectionItems extends XenobladeItems
{
    /**
     * @var XenobladeCollections
     * @ORM\ManyToOne(targetEntity="XenobladeCollections")
     * @ORM\JoinColumn(name="colid", referencedColumnName="colid")
     */
    private $collection;

    /**
     * @var XenobladeCollectionfieldtypes
     * @ORM\ManyToOne(targetEntity="XenobladeCollectionfieldtypes")
     * @ORM\JoinColumn(name="colftid", referencedColumnName="colftid")
     */
    private $collectionFieldType;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="collectionindex", type="boolean", nullable=true)
     */
    private $collectionindex;

    /**
     * @var string
     *
     * @ORM\Column(name="harmonyshulk", type="string", length=11, nullable=false)
     */
    private $harmonyshulk;

    /**
     * @var string
     *
     * @ORM\Column(name="harmonyreyn", type="string", length=11, nullable=false)
     */
    private $harmonyreyn;

    /**
     * @var string
     *
     * @ORM\Column(name="harmonysharla", type="string", length=11, nullable=false)
     */
    private $harmonysharla;

    /**
     * @var string
     *
     * @ORM\Column(name="harmonydunban", type="string", length=11, nullable=false)
     */
    private $harmonydunban;

    /**
     * @var string
     *
     * @ORM\Column(name="harmonymeli", type="string", length=11, nullable=false)
     */
    private $harmonymeli;

    /**
     * @var string
     *
     * @ORM\Column(name="harmonyriki", type="string", length=11, nullable=false)
     */
    private $harmonyriki;

    /**
     * @var string
     *
     * @ORM\Column(name="harmonyperson7", type="string", length=11, nullable=false)
     */
    private $harmonyperson7;

    public function getCollection(): ?XenobladeCollections
    {
        return $this->collection;
    }

    public function setCollection(?XenobladeCollections $collection): self
    {
        $this->collection = $collection;

        return $this;
    }

    public function getCollectionFieldType(): ?XenobladeCollectionfieldtypes
    {
        return $this->collectionFieldType;
    }

    public function setCollectionFieldType(?XenobladeCollectionfieldtypes $collectionFieldType): self
    {
        $this->collectionFieldType = $collectionFieldType;

        return $this;
    }

    public function getCollectionindex(): ?bool
    {
        return $this->collectionindex;
    }

    public function setCollectionindex(?bool $collectionindex): self
    {
        $this->collectionindex = $collectionindex;

        return $this;
    }

    public function getHarmonyshulk(): ?string
    {
        return $this->harmonyshulk;
    }

    public function setHarmonyshulk(string $harmonyshulk): self
    {
        $this->harmonyshulk = $harmonyshulk;

        return $this;
    }

    public function getHarmonyreyn(): ?string
    {
        return $this->harmonyreyn;
    }

    public function setHarmonyreyn(string $harmonyreyn): self
    {
        $this->harmonyreyn = $harmonyreyn;

        return $this;
    }

    public function getHarmonysharla(): ?string
    {
        return $this->harmonysharla;
    }

    public function setHarmonysharla(string $harmonysharla): self
    {
        $this->harmonysharla = $harmonysharla;

        return $this;
    }

    public function getHarmonydunban(): ?string
    {
        return $this->harmonydunban;
    }

    public function setHarmonydunban(string $harmonydunban): self
    {
        $this->harmonydunban = $harmonydunban;

        return $this;
    }

    public function getHarmonymeli(): ?string
    {
        return $this->harmonymeli;
    }

    public function setHarmonymeli(string $harmonymeli): self
    {
        $this->harmonymeli = $harmonymeli;

        return $this;
    }

    public function getHarmonyriki(): ?string
    {
        return $this->harmonyriki;
    }

    public function setHarmonyriki(string $harmonyriki): self
    {
        $this->harmonyriki = $harmonyriki;

        return $this;
    }

    public function getHarmonyperson7(): ?string
    {
        return $this->harmonyperson7;
    }

    public function setHarmonyperson7(string $harmonyperson7): self
    {
        $this->harmonyperson7 = $harmonyperson7;

        return $this;
    }

    public function getHarmonies(): array {
        return [
            'Shulk' => $this->harmonyshulk,
            'Dunban' => $this->harmonydunban,
            'Reyn' => $this->harmonyreyn,
            'Sharla' => $this->harmonysharla,
            'Melia' => $this->harmonymeli,
            'Riki' => $this->harmonyriki,
            'Person 7' => $this->harmonyperson7
        ];
    }
}
