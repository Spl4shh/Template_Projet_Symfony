<?php

namespace App\Controller\Example;

use App\Manager\ExampleManager;
use App\Utils\Enum\SymfonyRole;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditExampleController extends AbstractController
{
    #[Route('/example/edit/{!id}', name: 'exampleEdit', methods: ["GET", "POST"])]
    public function index(Request $request, EntityManagerInterface $manager, int $id): Response
    {
        if ($this->isGranted(SymfonyRole::USER)) {
            return $this->redirectToRoute("login");
        }

        $message = null;
        $exampleManager = new ExampleManager($manager);
        $example = $exampleManager->find($id);
        $data = $request->request;

        if ($example) {
            // Edit
        } else {
            return $this->redirectToRoute("home");
        }

        return $this->render("example/EditPerson.html.twig", [
            "example" => $example,
            "message" => $message,
        ]);
    }
}
