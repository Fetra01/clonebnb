<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController 
{   
    /**
     * @Route("/hello/{prenom}/{age}", name="hello")
     * @Route("/hello", name="hello_base")
     * @Route("/hello/{prenom}", name="hello_prenom")
     * Montre la page qui dit bonjour
     *
     * @return void
     */
    public function hello($prenom = "anonyme", $age = 0){
        return new Response("Bonjour " .$prenom. " vous avez " .$age. " ans");
    }

    /**
     * @Route("/", name="homepage")
     */
    public function home(){
        $prenoms = ['Max' => 31, 'Loris' => 24, 'Babs' =>11];

        return $this->render(
            'home.html.twig',
            [ 
                'title' => "Bonjour à tous !!",
                'age' => 12,
                'tableau' => $prenoms 
            ]
        );
    }

}
?>