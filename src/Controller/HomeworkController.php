<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeworkController extends AbstractController
{
    /**
     * @Route("/homework", name="homework")
     */
    public function index()
    {
        return $this->render('homework/index.html.twig');
    }

    /**
     * @Route("/remember", name="remember")
     */
    public function remember()
    {
        return $this->render('homework/remember.html.twig');
    }

    /**
     * @Route("/list", name="list")
     */

    public function list()
    {
    return $this->render('homework/list.html.twig',
    ['trida'  => [
    ['jmeno'=>"Vonásek",'znamka'=>1, 'predmet'=>"Matematika"],
    ['jmeno'=>"Vonásek",'znamka'=>2, 'predmet'=>"Dejepis"],
    ['jmeno'=>"Schilerová",'znamka'=>4, 'predmet'=>"Dejepis"],
    ['jmeno'=>"Nevim",'znamka'=>3, 'predmet'=>"Dejepis"],
    ['jmeno'=>"Nevim",'znamka'=>1, 'predmet'=>"Nic"]
    ]]);
    }


}
