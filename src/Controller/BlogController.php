<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/blog')]
class BlogController extends AbstractController
{
    #[Route('/', name: 'app_blog')]
    public function index(): Response
    {
        // Temporairement sans base de données
        $articles = [];

        return $this->render('blog/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    #[Route('/category/{category}', name: 'app_blog_category')]
    public function category(string $category): Response
    {
        // Temporairement sans base de données
        $articles = [];

        return $this->render('blog/category.html.twig', [
            'articles' => $articles,
            'category' => $category,
        ]);
    }

    #[Route('/{id}', name: 'app_blog_show', requirements: ['id' => '\d+'])]
    public function show(int $id): Response
    {
        // Temporairement sans base de données
        throw $this->createNotFoundException('Article non trouvé');
    }
}
