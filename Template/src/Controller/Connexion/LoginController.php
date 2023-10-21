<?php

namespace App\Controller\Connexion;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function index(AuthenticationUtils $authenticationUtils): Response {
        if ($this->isGranted("IS_AUTHENTICATED_FULLY")) {
            return $this->redirectToRoute("home");
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastLogin = $authenticationUtils->getLastUsername();

        return $this->render("connexion/login.html.twig", [
            "lastLogin" => $lastLogin,
            "error" => $error,
        ]);
    }
}
