<?php

namespace App\Entity;

/**
 * News
 */
class News
{
    /**
     * @var \DateTime
     */
    private $entryDate;

    /**
     * @var string|null
     */
    private $author;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $slug;

    /**
     * @var int
     */
    private $version;

    /**
     * @var string|null
     */
    private $content;



    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }


    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }


    public function getEntryDate(): ?\DateTimeInterface
    {
        return $this->entryDate;
    }

    public function setEntryDate(string $dateString): self
    {
        $timeZone = 'Europe/Berlin';
        $date = date_create($dateString,timezone_open($timeZone));
        $this->entryDate = $date;

        return $this;
    }

    public function getVersion(): ?int
    {
        return $this->version;
    }

    public function setVersion(int $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }





}
