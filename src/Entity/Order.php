<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="`order`")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Food::class, inversedBy="orders")
     */
    private $food;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(
     *      min = 1,
     *      max = 100,
     *      notInRangeMessage = "You must be between {{ min }} and {{ max }}",
     * )
     */
    private $Qty;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $orderAt;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="orders")
     */
    private $owner;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Address;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isDelivred = false;

    /**
     * @ORM\ManyToOne(targetEntity=Restaurant::class, inversedBy="orders")
     */
    private $restaurant;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isPayed;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $total;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFood(): ?Food
    {
        return $this->food;
    }

    public function setFood(?Food $food): self
    {
        $this->food = $food;

        return $this;
    }

    public function getQty(): ?int
    {
        return $this->Qty;
    }

    public function setQty(int $Qty): self
    {
        $this->Qty = $Qty;

        return $this;
    }

    public function getOrderAt(): ?\DateTime
    {
        return $this->orderAt;
    }

    public function setOrderAt(\DateTime $orderAt): self
    {
        $this->orderAt = $orderAt;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getOwner(): ?User
    {
        return $this->owner;
    }

    public function setOwner(?User $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->Address;
    }

    public function setAddress(string $Address): self
    {
        $this->Address = $Address;

        return $this;
    }

    public function getIsDelivred(): ?bool
    {
        return $this->isDelivred;
    }

    public function setIsDelivred(bool $isDelivred): self
    {
        $this->isDelivred = $isDelivred;

        return $this;
    }

    public function getRestaurant(): ?Restaurant
    {
        return $this->restaurant;
    }

    public function setRestaurant(?Restaurant $restaurant): self
    {
        $this->restaurant = $restaurant;

        return $this;
    }

    public function getCardPayment(): ?bool
    {
        return $this->card_payment;
    }

    public function setCardPayment(bool $card_payment): self
    {
        $this->card_payment = $card_payment;

        return $this;
    }

    public function getIsPayed(): ?bool
    {
        return $this->isPayed;
    }

    public function setIsPayed(?bool $isPayed): self
    {
        $this->isPayed = $isPayed;

        return $this;
    }
}
