<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Entity\Apartment;

class ApartmentTest extends WebTestCase
{
    public function testApartmentEntity(): void
    {
        $apartment = new Apartment();
        $apartment->setStage(1);
        $apartment->setRoomNumber(2);
        $apartment->setLift(false);
        $apartment->setZipCode(33500);
        $apartment->setCity('libourne');
        $apartment->setAddress('16 rue des saules');
        $apartment->setComplement('complement');
        $apartment->setPictureFileName('picture');

        $this->assertEquals(1, $apartment->getStage());
        $this->assertEquals(2, $apartment->getRoomNumber());
        $this->assertEquals(false, $apartment->getLift());
        $this->assertEquals(33500, $apartment->getZipCode());
        $this->assertEquals('libourne', $apartment->getCity());
        $this->assertEquals('16 rue des saules', $apartment->getAddress());
        $this->assertEquals('complement', $apartment->getComplement());
        $this->assertEquals('picture', $apartment->getPictureFileName());
    }
}
