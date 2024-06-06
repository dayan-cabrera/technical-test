<?php
// src/Controller/HomeController.php
namespace App\Controller;

use App\Service\MathService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class OtherController extends AbstractController
{
    protected MathService $mathService;

    public function __construct(MathService $mathService)
    {
        $this->mathService = $mathService;
    }


    #[Route('/add/{numberOne}/{numberTwo}', name: 'add')]
    public function add(float $numberOne, float $numberTwo): Response
    {
        return new Response(
            $this->mathService->add($numberOne, $numberTwo)
        );
    }
}
