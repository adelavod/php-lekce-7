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
     * @Route("/trest", name="trest")
     */
    public function liszt(ProgrammingLanguageRepository $programmingLanguageRepository)
    {
        return $this->render('trest/index.html.twig', [
            'controller_name' => 'TRESTController',
        ]);
    }

    //nedodělané, ale nevadí, doma!

    /**
     * @Route("/trest/known", name="trest_known")
     */
    public function known(ProgrammingLanguageRepository $programmingLanguageRepository)
    {

        return $this->render('trest/index.html.twig', [
            'controller_name' => 'TRESTController',
            'languages' => $programmingLanguageRepository->findKnown()
        ]);
    }
}
