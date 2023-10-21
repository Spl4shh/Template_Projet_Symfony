<?php

namespace App\Controller\Example;

use App\Manager\ExampleManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowExampleController extends AbstractController
{
    #[Route("/example/show/{!id}", name: "exampleShow")]
    public function index(EntityManagerInterface $manager, int $id): Response {
        $exampleManager = new ExampleManager($manager);
        $example = $exampleManager->find($id);

        if ($example) {
            return $this->render("example/ShowExample.html.twig", [
                "example" => $example,
            ]);
        } else {
            return $this->redirectToRoute("home");
        }
    }
}
