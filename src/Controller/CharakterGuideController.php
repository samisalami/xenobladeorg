<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CharakterGuideController extends AbstractController
{

    public function index(string $character)
    {
        return $this->render(str_replace("{NAME}", $character, "guides/charakter_{NAME}.html.twig"));
    }
}
