<?php
// src/Controller/HomeController.php
namespace App\Controller;

use App\Service\MathService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    protected MathService $mathService;

    public function __construct(MathService $mathService)
    {
        $this->mathService = $mathService;
    }

    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return new Response('I\'m in route /');
    }

    #[Route('/hello/{name}', name: 'greeting')]
    public function greeting(string $name = "World"): Response
    {
        return new Response("Hello $name");
    }
}
