<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class PythagorasController extends AbstractController
{
    /**
     * @Route("/pythagoras", name="pythagoras")
     */
    public function index()
    {
        return $this->render('pythagoras/index.html.twig', [
            'controller_name'  => 'Pythagoras',
        ]);
    }


    /**
     * @Route("/obdelnik", name="obdelnik")
     */
    public function obdelnik()
    {
        $a = 4;
        $b = 5;
        $obsahobdelnika = $a * $b;
        return $this->render('pythagoras/obdelnik.html.twig', [
            'obsahobdelnika' => $obsahobdelnika,
            'a' => $a,
            'b' => $b,
        ]);
    }

    /**
     * @Route("/trojuhelnik", name="trojuhelnik")
     */
    public function trojuhelnik()
    {
        $strana = 6;
        $uhel = 60;
        $uhelvRad= deg2rad($uhel);
        $vyska = sin($uhelvRad)*$strana;
        $roundvyska = round($vyska,2);
        $obsahtrojuhelnika = ($strana*$vyska)/2;
        $roundobsah = round ($obsahtrojuhelnika,2);

        return $this->render('pythagoras/trojuhelnik.html.twig', [
            'obsahtrojuhelnika' => $obsahtrojuhelnika,
            'strana' => $strana,
            'uhel' => $uhel,
            'vyska'=> $roundvyska,
            'obsah'=> $roundobsah
        ]);
    }
}
