<?php

namespace App\Controller;

use App\Entity\Lobster;
use App\Form\LobsterType;
use App\Repository\LobsterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/lobster")
 */
class LobsterController extends AbstractController
{
    /**
     * @Route("/", name="lobster_index", methods="GET")
     */
    public function index(LobsterRepository $lobsterRepository): Response
    {
        return $this->render('lobster/index.html.twig',
            ['lobsters' => $lobsterRepository->findAll()]);
    }

    /**
     * @Route("/albino", name="albino")
     */
    public function albino(LobsterRepository $lobsterRepository)
    {
        return $this->render('lobster/albino.html.twig',
            ['lobsters' => $lobsterRepository->findAlbino()]);
    }

    /**
     * @Route("/healthy", name="healthy")
     */
    public function healthy(LobsterRepository $lobsterRepository)
    {
        return $this->render('lobster/healthy.html.twig',
            ['lobsters' => $lobsterRepository->findGoodHealth()]);
    }

    /**
     * @Route("/new", name="lobster_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $lobster = new Lobster();
        $form = $this->createForm(LobsterType::class, $lobster);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lobster);
            $em->flush();

            return $this->redirectToRoute('lobster_index');
        }

        return $this->render('lobster/new.html.twig', [
            'lobster' => $lobster,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="lobster_show", methods="GET")
     */
    public function show(Lobster $lobster): Response
    {
        return $this->render('lobster/show.html.twig', ['lobster' => $lobster]);
    }

    /**
     * @Route("/{id}/edit", name="lobster_edit", methods="GET|POST")
     */
    public function edit(Request $request, Lobster $lobster): Response
    {
        $form = $this->createForm(LobsterType::class, $lobster);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lobster_edit', ['id' => $lobster->getId()]);
        }

        return $this->render('lobster/edit.html.twig', [
            'lobster' => $lobster,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="lobster_delete", methods="DELETE")
     */
    public function delete(Request $request, Lobster $lobster): Response
    {
        if ($this->isCsrfTokenValid('delete' . $lobster->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($lobster);
            $em->flush();
        }

        return $this->redirectToRoute('lobster_index');
    }
}
