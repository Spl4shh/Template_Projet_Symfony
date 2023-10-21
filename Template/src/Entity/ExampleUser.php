<?php

namespace App\Entity;

use App\Repository\ExampleUserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExampleUserRepository::class)
 */
class ExampleUser
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $login;

    #[ORM\Column(length: 255)]
    private ?string $password;

    #[ORM\Column]
    private array $roles = [];

    public function getId(): ?int {
        return $this->id;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string {
        return $this->password;
    }

    public function setPassword(string $password): static {
        $this->password = $password;

        return $this;
    }

    public function getLogin(): string {
        return $this->login;
    }

    public function setLogin(string $login): self {
        $this->login = $login;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string {
        return (string)$this->login;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array {
        $roles = $this->roles;

        if (sizeof($roles) == 0) {
            return array('ROLE_USER');
        } else {
            return $roles;
        }
    }
}
