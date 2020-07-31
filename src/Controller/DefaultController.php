<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index()
    {
        return $this->render('index.html.twig', [
            'newsList' => NewsController::getNewsList($this)
        ]);
    }

    public function error404()
    {
        return $this->render('error.html.twig', [
           'status_code' => 404,
           'status_text' => 'Seite nicht gefunden',
        ]);
    }

    public function error500()
    {
        return $this->render('error.html.twig', [
           'status_code' => 500,
           'status_text' => 'Interner Serverfehler',
        ]);
    }
}
