<?php

namespace App\Controller\Example;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateExampleController extends AbstractController
{
    #[Route('/example/create', name: 'exampleCreate', methods: ["GET", "POST"])]
    public function index(Request $request, EntityManagerInterface $manager): Response
    {
        $message = null;
        $data = $request->request;

        if ($data->count() > 0) {
            // Si l'on a saisit des données
        }

        return $this->render("example/CreateExample.html.twig", [
            "message" => $message
        ]);
    }
}
