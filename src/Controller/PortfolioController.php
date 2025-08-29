<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/portfolio')]
class PortfolioController extends AbstractController
{
    #[Route('/', name: 'app_portfolio')]
    public function index(): Response
    {
        $projects = [
            [
                'title' => 'Évolutions Aéroport de Bordeaux-Mérignac',
                'description' => 'Migration du moteur de vol EasyVoyage vers OptionWay avec Drupal 9',
                'technologies' => ['Drupal 9', 'PHP', 'Symfony', 'API REST'],
                'image' => 'airport-project.jpg',
                'category' => 'Web Development'
            ],
            [
                'title' => 'Site InfoTBM',
                'description' => 'Développement de nouvelles fonctionnalités en NextJS pour les transports bordelais',
                'technologies' => ['NextJS', 'React', 'API REST', 'JavaScript'],
                'image' => 'infotbm-project.jpg',
                'category' => 'Frontend Development'
            ],
            [
                'title' => 'Usine à sites Nhood',
                'description' => 'Refonte complète avec IbexaDXP pour la gestion multi-sites',
                'technologies' => ['IbexaDXP', 'Symfony', 'PHP', 'API', 'Google Tag Manager'],
                'image' => 'nhood-project.jpg',
                'category' => 'Full Stack Development'
            ]
        ];

        return $this->render('portfolio/index.html.twig', [
            'projects' => $projects,
        ]);
    }

    #[Route('/project/{slug}', name: 'app_portfolio_project')]
    public function project(string $slug): Response
    {
        // Ici on pourrait récupérer les détails du projet depuis la base de données
        // Pour l'instant, on fait du statique pour la démonstration

        $projectDetails = [
            'aeroportbx' => [
                'title' => 'Évolutions Aéroport de Bordeaux-Mérignac',
                'description' => 'Migration complète du système de réservation de vols',
                'challenge' => 'Remplacer entièrement EasyVoyage par OptionWay en respectant des délais très courts',
                'solution' => 'Développement en 3 lots successifs avec mise en ligne progressive',
                'technologies' => ['Drupal 9', 'PHP', 'Symfony', 'API REST', 'OptionWay API'],
                'results' => 'Augmentation des ventes de billets d\'avion et retours clients très positifs'
            ]
        ];

        if (!isset($projectDetails[$slug])) {
            throw $this->createNotFoundException('Projet non trouvé');
        }

        return $this->render('portfolio/project.html.twig', [
            'project' => $projectDetails[$slug],
            'slug' => $slug,
        ]);
    }
}
