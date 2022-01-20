<?php

namespace App\Service;

use App\Entity\Apartment;
use Cocur\Slugify\Slugify;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class ApartmentService
{
    private $slugger;
    private $pathUpload;
    private $em;

    public function __construct($pathUpload, EntityManagerInterface $em)
    {
        $this->pathUpload = $pathUpload;
        $slugify = new Slugify();
        $this->slugger = $slugify;
        $this->em = $em;
    }

    public function apartment($request): ?Apartment
    {
        $apartment = $request->query->get('id') !== null ?  $this->em->getRepository(Apartment::class)->find($request->query->get('id')) : new Apartment();
        return $apartment;
    }

    public function uploadFile($form): Apartment
    {
        $apartmentPicture = $form['pictureFileName']->getData() ?? null;
        $apartment = $form->getData();
        if ($apartmentPicture) {
            $pictureName = pathinfo($apartmentPicture->getClientOriginalName(), PATHINFO_FILENAME);
            $Filename = $this->slugger->slugify($pictureName) . '-' . uniqid() . '.' . $apartmentPicture->guessExtension();

            try {
                $apartmentPicture->move(
                    $this->pathUpload,
                    $Filename
                );
            } catch (FileException $e) {
                throw new FileException('error upload file', 411);
            }

            $apartment->setPictureFileName($Filename);
        }
        return $apartment;
    }
}
