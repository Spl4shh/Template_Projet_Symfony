<?php

namespace App\Entity;

use App\Repository\ExampleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExampleRepository::class)
 */
class Example
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $login;

    #[ORM\Column(length: 255, unique: true)]
    private string $name;

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): self {
        $this->name = $name;

        return $this;
    }

    public function getLogin(): string {
        return $this->login;
    }

    public function setLogin(string $login): self {
        $this->login = $login;

        return $this;
    }
}
