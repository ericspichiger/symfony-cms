<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="app_")
 */
class HomeController extends BaseController
{

    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('pages/home.html.twig');
    }
}
