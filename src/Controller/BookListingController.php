<?php

namespace App\Controller;

use App\Repository\BookRepository;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BookListingController extends AbstractController
{
    /**
     * @Route("/book_listing", name="book_listing")
     */

     public function index(BookRepository $bookRepository)
     {
         return $this->render('book_listing/index.html.twig',
             ['books' => $bookRepository->findAll(),
             ]);
     }

    /**
     * @Route("/book_listing/century", name="century")
     */
    public function century(BookRepository $bookRepository)
    {
        $rok = date('Y');
        return $this->render('book_listing/century.html.twig',
            ['books' => $bookRepository->findAll(),
                'date' =>$rok
        ]);
    }

    /**
     * @Route("/book_listing/author", name="author")
     */
    public function author(BookRepository $bookRepository)
    {

        return $this->render('book_listing/author.html.twig',
            ['books' => $bookRepository->findBy(array(), array('Autor'=>'ASC')),
            ]);
    }

    /**
     * @Route("/book_listing/price", name="price")
     */
    public function price(BookRepository $bookRepository)
    {
        $books = $bookRepository->orderprice();
        return $this->render('book_listing/price.html.twig',
            ['books' => $books]);
    }

    /**
     * @Route("/book_listing/new", name="new")
     */
    public function new(BookRepository $bookRepository)
    {
        $datum = date('Y');
        $dvaroky = $datum - 2;
        return $this->render('book_listing/new.html.twig',
            ['books' => $bookRepository->findAll(),
                'datum'=>$datum,
            'dvaroky'=>$dvaroky]);
    }
}
