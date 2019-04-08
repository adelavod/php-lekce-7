<?php

namespace App\Controller;

use App\Repository\ProgrammingLanguageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TRESTController extends AbstractController
{
    /**
     * @Route("/trest", name="trest")
     */
    public function index()
    {
        return $this->render('trest/index.html.twig', [
            'controller_name' => 'TRESTController',
        ]);
    }

    /**
     * @Route("/trest/liszt", name="trest_liszt")
     */
    public function liszt(ProgrammingLanguageRepository $programmingLanguageRepository)
    {
        return $this->render('trest/liszt.html.twig', [
            'controller_name' => 'TRESTController',
            'languages'=> $programmingLanguageRepository->findAll()
        ]);
    }

    /**
     * @Route("/trest/known", name="trest_known")
     */
    public function known(ProgrammingLanguageRepository $programmingLanguageRepository)
    {

        return $this->render('trest/known.html.twig', [
            'controller_name' => 'TRESTController',
            'languages' => $programmingLanguageRepository->findKnown()
        ]);
    }
}
