<?php

namespace App\Controller;

use App\Entity\Announces;
use App\Form\AnnouncesType;
use App\Repository\AnnouncesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/annonces", name="annonces_")
 */
class AnnouncesController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(AnnouncesRepository $announcesRepo): Response
    {
        $annonces = $announcesRepo->findAll();

        return $this->render('announces/index.html.twig', [
            'annonces' =>  $annonces
        ]);
    }

    /**
     * @Route("/add", name="annonces_add")
     */
    public function add(Request $request)
    {
        $annonces = new Announces;
        $annonces->setCreationAt(new \DateTime());
        $annonces->setUpdateAt(new \DateTime());
        //dd($this->getUser());
        $annonces->setUsers($this->getUser());

        $formAnnonces = $this->createForm(AnnouncesType::class, $annonces);

        $formAnnonces->handleRequest($request);

        if ($formAnnonces->isSubmitted() && $formAnnonces->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($annonces);
            $entityManager->flush();

            $this->addFlash('announces_add_success', 'Votre annonce a été ajoutée!');

            return $this->redirectToRoute('annonces_index');
        }


        return $this->render('announces/form-add.html.twig', [
        'formAnnonces'=> $formAnnonces->createView()
        ]);
    }

    /**
     * @Route("/show/{id}", name="annonces_detail")
     */
    public function show($id)
    {
        $annonces = $this->getDoctrine()->getRepository(Announces::class)->find($id);

        return $this->render('announces/form-show.html.twig', [
            'annonces' => $annonces
        ]);

    }

    /**
     * @Route("/edit/{id}", name="annonces_edit")
     */
    public function edit($id, Request $request)
    {
        #Etape 1 recuperer l'objet à modifier
        $annonces = $this->getDoctrine()->getRepository(Announces::class)->find($id);

        $formAnnonces = $this->createForm(AnnouncesType::class, $annonces);
                    
        $formAnnonces->handleRequest($request);

        if ($formAnnonces->isSubmitted() && $formAnnonces->isValid()) 
        {
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->flush();

            $this->addFlash('announces_edit_success', 'L\'Annonce a bien été modifiée!');

            return $this->redirectToRoute('annonces_index');
        }

        return $this->render('announces/form-edit.html.twig', [
            'formAnnonces' => $formAnnonces->createView()
        ]);
    }

    /**
     * @Route("/delete/{id}", name="annonces_delete")
     */
    public function delete($id)
    {
        #Etape 1 recuperer l'objet à supp
        $annonces = $this->getDoctrine()->getRepository(Announces::class)->find($id);

        #Etape 2 appeler l'entityManager de Doctrine pr ecrire dns la bdd
        $entityManager = $this->getDoctrine()->getManager();

        #Etape 3 supprimer l'objet recuperer via l'id
        $entityManager->remove($annonces);

        #Etape 4 pas besoin du persist() pr enregistrer la suppression
        $entityManager->flush();

        $this->addFlash('announces_delete_success', 'L\'Annonce a bien été supprimée!');

        return $this->redirectToRoute('annonces_index');
        
    }










}