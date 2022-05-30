<?php

namespace App\Entity;

use App\Repository\DataRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DataRepository::class)]
class Data
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'float')]
    private $price;

    #[ORM\Column(type: 'integer')]
    private $typeOfPrice;

    #[ORM\Column(type: 'integer')]
    private $mounth;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getTypeOfPrice(): ?int
    {
        return $this->typeOfPrice;
    }

    public function setTypeOfPrice(int $typeOfPrice): self
    {
        $this->typeOfPrice = $typeOfPrice;

        return $this;
    }

    public function getMounth(): ?int
    {
        return $this->mounth;
    }

    public function setMounth(int $mounth): self
    {
        $this->mounth = $mounth;

        return $this;
    }
}
