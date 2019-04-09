<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BookListingController extends AbstractController
{
    /**
     * @Route("/book/listing", name="book_listing")
     */
    public function index()
    {
        return $this->render('book_listing/index.html.twig', [
            'controller_name' => 'BookListingController',
        ]);
    }
}
