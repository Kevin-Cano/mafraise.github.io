<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // Temporairement sans base de données
        $latestArticles = [];

        return $this->render('home/index.html.twig', [
            'latest_articles' => $latestArticles,
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig');
    }

    #[Route('/entreprise', name: 'app_entreprise')]
    public function entreprise(): Response
    {
        return $this->render('home/entreprise.html.twig');
    }

    #[Route('/stage', name: 'app_stage')]
    public function stage(): Response
    {
        return $this->render('home/stage.html.twig');
    }

    #[Route('/bilan', name: 'app_bilan')]
    public function bilan(): Response
    {
        return $this->render('home/bilan.html.twig');
    }

    #[Route('/projet-professionnel', name: 'app_projet_professionnel')]
    public function projetProfessionnel(): Response
    {
        return $this->render('home/projet-professionnel.html.twig');
    }
}
