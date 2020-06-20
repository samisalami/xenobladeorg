<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XenobladeColony6categorylevelitemR
 *
 * @ORM\Table(name="xenoblade_colony6categorylevelitem_r")
 * @ORM\Entity
 */
class XenobladeColony6categorylevelitemR
{
    /**
     * @var int
     *
     * @ORM\Column(name="c6cliid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $c6cliid;

    /**
     * @var XenobladeItems|null
     *
     * @ORM\ManyToOne(targetEntity="XenobladeItems")
     * @ORM\JoinColumn(name="iid", referencedColumnName="iid")
     */
    private $rewardItem;

    /**
     * @var XenobladeColony6categorylevels
     *
     * @ORM\ManyToOne(targetEntity="XenobladeColony6categorylevels")
     * @ORM\JoinColumn(name="c6clid", referencedColumnName="c6clid", nullable=false)
     */
    private $categoryLevel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    public function getC6cliid(): ?int
    {
        return $this->c6cliid;
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

    public function getCategoryLevel(): ?XenobladeColony6categorylevels
    {
        return $this->categoryLevel;
    }

    public function setCategoryLevel(XenobladeColony6categorylevels $categoryLevel): self
    {
        $this->categoryLevel = $categoryLevel;

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
