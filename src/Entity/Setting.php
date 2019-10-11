<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SettingRepository")
 */
class Setting
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $custom_code;

    /**
     * @ORM\Column(type="integer")
     */
    private $items_per_page;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ymaps_key;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $map_center;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Range(min = 0, max = 19)
     */
    private $map_zoom;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Currency")
     * @ORM\JoinColumn(nullable=false)
     */
    private $currency;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getCustomCode(): ?string
    {
        return $this->custom_code;
    }

    public function setCustomCode(?string $custom_code): self
    {
        $this->custom_code = $custom_code;

        return $this;
    }

    public function getItemsPerPage(): ?int
    {
        return $this->items_per_page;
    }

    public function setItemsPerPage(int $items_per_page): self
    {
        $this->items_per_page = $items_per_page;

        return $this;
    }

    public function getYmapsKey(): ?string
    {
        return $this->ymaps_key;
    }

    public function setYmapsKey(?string $ymaps_key): self
    {
        $this->ymaps_key = $ymaps_key;

        return $this;
    }

    public function getMapCenter(): ?string
    {
        return $this->map_center;
    }

    public function setMapCenter(?string $map_center): self
    {
        $this->map_center = $map_center;

        return $this;
    }

    public function getMapZoom(): ?int
    {
        return $this->map_zoom;
    }

    public function setMapZoom(?int $map_zoom): self
    {
        $this->map_zoom = $map_zoom;

        return $this;
    }

    public function getCurrency(): ?Currency
    {
        return $this->currency;
    }

    public function setCurrency(?Currency $currency): self
    {
        $this->currency = $currency;

        return $this;
    }
}
