<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeColony6categories
 *
 * @ORM\Table(name="xenoblade_colony6categories")
 * @ORM\Entity
 */
class XenobladeColony6categories
{
    /**
     * @var int
     *
     * @ORM\Column(name="c6cid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $c6cid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="prio", type="integer", nullable=false)
     */
    private $prio;

    /**
     * @var XenobladeItems|null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeItems", inversedBy="rewardCollections")
     * @ORM\JoinColumn(name="iid", referencedColumnName="iid")
     */
    private $rewardItem;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getC6cid(): ?int
    {
        return $this->c6cid;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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
