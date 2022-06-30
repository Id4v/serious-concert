<?php

namespace App\Entity;

use App\Repository\NewsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NewsRepository::class)]
class News
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string', length: 255)]
    private string $title;

    #[ORM\Column(type: 'text')]
    private string $content;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $picture;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $startPublicationAt;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $endPublicationAt;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getStartPublicationAt(): ?\DateTimeImmutable
    {
        return $this->startPublicationAt;
    }

    public function setStartPublicationAt(?\DateTimeImmutable $startPublicationAt): self
    {
        $this->startPublicationAt = $startPublicationAt;

        return $this;
    }

    public function getEndPublicationAt(): ?\DateTimeImmutable
    {
        return $this->endPublicationAt;
    }

    public function setEndPublicationAt(?\DateTimeImmutable $endPublicationAt): self
    {
        $this->endPublicationAt = $endPublicationAt;

        return $this;
    }
}
