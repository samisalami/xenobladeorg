<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GiftGuideController extends AbstractController
{
    public function index() {


        return $this->render('guides/gifts.html.twig'
                            );

    }

}
