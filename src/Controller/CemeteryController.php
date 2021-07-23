<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Cemetery;

class CemeteryController extends AbstractController
{
    /**
     * @Route("/cemetery", name="cemetery")
     */
    public function index(): Response
    {
        return $this->json($this->getDoctrine()->getRepository(Cemetery::class)->findAll());
    }

    /**
     * @Route("/cemetery/{id}", name="Individual Cemetery")
     */
    public function getCemetery(int $id): Response
    {
        return $this->json($this->getDoctrine()->getRepository(Cemetery::class)->find($id));
    }
}
