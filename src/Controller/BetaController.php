<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

class BetaController extends AbstractController
{

    /**
     * @Route("/beta", name="beta")
     */
    public function index()
    {

        return $this->render('beta/index.html.twig', [
            'controller_name'  => 'BetaController',
        ]);
    }

    /**
     * @Route("/beta/detail", name="detail")
     */
    public function detail()
    {
        $pole = ["username" => "andrejmaly",
            "password"=>"velicesloziteheslo",
            "name"=>"Andrej Malý",
            "age"=>20];

        return $this->render('beta/detail.html.twig',
            [
                'data' => $pole
            ]);


}

    /**
     * @Route("/beta/list", name="beta_list")
     */

    public function list()
    {
     $handle = @fopen('znamky.txt', 'r');
      $text = fread($handle, 5000);
       echo $text;

        return $this->render('beta/list.html.twig',
            ['trida'  => [
                ['jmeno'=>"Vonásek",'znamka'=>1, 'predmet'=>"Matematika"],
                ['jmeno'=>"Vonásek",'znamka'=>2, 'predmet'=>"Dejepis"],
                ['jmeno'=>"Schilerová",'znamka'=>4, 'predmet'=>"Dejepis"],
                ['jmeno'=>"Nevim",'znamka'=>3, 'predmet'=>"Dejepis"],
                ['jmeno'=>"Nevim",'znamka'=>1, 'predmet'=>"Nic"]
            ]]);
    }

    /**
     * @Route("/beta/{pozdrav}", name="pozdrav")
     */
   // public function hello($pozdrav)
  //  {
   //     return $this->render('beta/index.html.twig', ['controller_name' => $pozdrav,]);
  //  }
}
