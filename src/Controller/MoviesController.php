<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index()
    {

        $movies = ["Avengers: Endgame","Inception","Loki","Sega sony"];
        return $this->render('index.html.twig',[
            'title' => 'Avengers: Endgame',
            'movies' => $movies
        ]);
    }

}
