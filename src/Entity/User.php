<?php

namespace App\Entity;

use App\Enum\AccountStatusType;
use App\Enum\UserStatusEnum;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $username = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\ManyToOne]
    private ?Subscription $current_subscription_id = null;

    #[ORM\Column(length: 20)]
    private ?UserStatusEnum $account_status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getCurrentSubscriptionId(): ?Subscription
    {
        return $this->current_subscription_id;
    }

    public function setCurrentSubscriptionId(?Subscription $current_subscription_id): static
    {
        $this->current_subscription_id = $current_subscription_id;

        return $this;
    }

    public function getAccountStatus(): ?string
    {
        return $this->account_status;
    }

    public function setAccountStatus(string $account_status): static
    {
        $this->account_status = $account_status;

        return $this;
    }
}
