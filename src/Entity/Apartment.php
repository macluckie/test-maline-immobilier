<?php

namespace App\Entity;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use App\Repository\ApartmentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ApartmentRepository::class)
 *  @UniqueEntity("address")
 */
class Apartment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $stage;

    /**
     * @ORM\Column(type="integer")
     */
    private $room_number;

    /**
     * @ORM\Column(type="boolean")
     */
    private $lift;

    /**
     * @ORM\Column(type="integer")
     */
    private $zip_code;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $complement;

    /**
     * @ORM\Column(type="string")
     */
    private $pictureFileName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStage(): ?int
    {
        return $this->stage;
    }

    public function setStage(int $stage): self
    {
        $this->stage = $stage;

        return $this;
    }

    public function getRoomNumber(): ?int
    {
        return $this->room_number;
    }

    public function setRoomNumber(int $room_number): self
    {
        $this->room_number = $room_number;

        return $this;
    }

    public function getLift(): ?bool
    {
        return $this->lift;
    }

    public function setLift(bool $lift): self
    {
        $this->lift = $lift;

        return $this;
    }

    public function getZipCode(): ?int
    {
        return $this->zip_code;
    }

    public function setZipCode(int $zip_code): self
    {
        $this->zip_code = $zip_code;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getComplement(): ?string
    {
        return $this->complement;
    }

    public function setComplement(string $complement): self
    {
        $this->complement = $complement;

        return $this;
    }

    /**
     * Get the value of pictureFileName
     */ 
    public function getPictureFileName()
    {
        return $this->pictureFileName;
    }

    /**
     * Set the value of pictureFileName
     *
     * @return  self
     */ 
    public function setPictureFileName($pictureFileName)
    {
        $this->pictureFileName = $pictureFileName;

        return $this;
    }
}
