<?php

namespace App\Entity;

use App\Repository\PaymentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PaymentRepository::class)]
class Payment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Credit card number is required')]
    #[Assert\CardScheme(
        schemes: ['VISA', 'MASTERCARD', 'AMEX'],
        message: 'The credit card number is invalid'
    )]
    private ?string $cardNumber = null;

    #[ORM\Column(length: 7)]
    #[Assert\NotBlank(message: 'Expiration date is required')]
    #[Assert\Regex(
        pattern: '/^(0[1-9]|1[0-2])\/([0-9]{2})$/',
        message: 'Expiration date must be in MM/YY format'
    )]
    private ?string $expirationDate = null;

    #[ORM\Column(length: 3)]
    #[Assert\NotBlank(message: 'CVV is required')]
    #[Assert\Length(
        exactly: 3,
        exactMessage: 'CVV must be exactly {{ limit }} digits'
    )]
    private ?string $cvv = null;

    #[ORM\OneToOne(inversedBy: 'payment', cascade: ['persist', 'remove'])]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    public function setCardNumber(string $cardNumber): static
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }

    public function setExpirationDate(string $expirationDate): static
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    public function getCvv(): ?string
    {
        return $this->cvv;
    }

    public function setCvv(string $cvv): static
    {
        $this->cvv = $cvv;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }
}
