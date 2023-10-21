<?php

namespace App\Controller\Connexion;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LogoutController extends AbstractController
{
    /**
     * @throws Exception
     */
    #[Route('/logout', name: 'logout', methods: ['GET'])]
    public function index(): void
    {
        throw new Exception('Don\'t forget to activate logout in security.yaml');
    }
}
