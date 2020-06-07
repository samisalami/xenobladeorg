<?php
namespace App\Controller;
use App\Entity\XenobladeChapters;
use App\Entity\XenobladePersons;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class JewelsController extends AbstractController
{
    public function index()
    {
        return $this->render('/items/jewels.html.twig', [
        ]);
    }
}
