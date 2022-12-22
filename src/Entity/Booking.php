<?php

namespace App\Entity;

use App\Repository\BookingRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=BookingRepository::class)
 */
class Booking
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity=Restaurant::class, inversedBy="bookings")
     */
    private $restaurant;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="bookings")
     */
    private $owner;

    /**
     * @ORM\Column(type="date")
     * @Gedmo\Timestampable(on="create")
     */
    private $bookingAt;


    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $stat;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(
     *      min = 1,
     *      max = 10,
     *      notInRangeMessage = "You must be between {{ min }} and {{ max }}",
     * )
     */
    private $nbPerson;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getOwner(): ?User
    {
        return $this->owner;
    }

    public function setOwner(?User $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getBookingAt(): ?\DateTime
    {
        return $this->bookingAt;
    }

    public function setBookingAt(\DateTime $bookingAt): self
    {
        $this->bookingAt = $bookingAt;

        return $this;
    }


    public function getStat(): ?bool
    {
        return $this->stat;
    }

    public function setStat(?bool $stat): self
    {
        $this->stat = $stat;

        return $this;
    }

    public function getNbPerson(): ?int
    {
        return $this->nbPerson;
    }

    public function setNbPerson(int $nbPerson): self
    {
        $this->nbPerson = $nbPerson;

        return $this;
    }
    public function __toString()
    {
        return $this->getNbPerson();
    }
}
