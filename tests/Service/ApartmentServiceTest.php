<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Entity\Apartment;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\ApartmentService;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;

class ApartmentServiceTest extends WebTestCase
{

    public function testApartmentWhenIdIsNull(): void
    {
        $entityManger = $this->createMock(EntityManagerInterface::class);

        $request = $this->createMock(Request::class);
        $request->query = $this->createMock(ParameterBag::class);
        $request->query->expects($this->any())
            ->method('get')
            ->willReturn(null);
        $service = new ApartmentService('folder_upload', $entityManger);
        $this->assertInstanceOf(Apartment::class, $service->apartment($request));
    }
}
