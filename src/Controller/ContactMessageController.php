<?php

namespace App\Controller;

use App\Entity\ContactMessage;
use App\Form\ContactMessageType;
use App\Form\Users;
use App\Repository\ContactMessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/contact", name="contact_")
 */
class ContactMessageController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(ContactMessageRepository $contactMessageRepo): Response
    {   
        $contactMessage = $contactMessageRepo->findall();

        return $this->render('contact_message/index.html.twig', [
            'contactMessage' => $contactMessage
        ]);
    }


    /**
     * @Route("/add", name="contact_add")
     */
    public function add(Request $request): Response
    {
        $contactMessage = new ContactMessage;
        
        //dd($this->getUser());
        $contactMessage->setContactAt(new \DateTime());
        //$contactMessage->setAnnounces();
       
        $formContactMessage = $this->createForm(ContactMessageType::class, $contactMessage);

        $formContactMessage->handleRequest($request);

        if ($formContactMessage->isSubmitted() && $formContactMessage->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contactMessage);
            $entityManager->flush();

            $this->addFlash('contactMessage_add_success', 'Bienvenue!');

            return $this->redirectToRoute('contact_index');
        }


        return $this->render('contact_message/form-add.html.twig', [
            'formContactMessage' => $formContactMessage->createView()
        ]);
    }

    /**
     * @Route("/show/{id}", name="contact_detail")
     */
    public function show($id)
    {
        $contactMessage = $this->getDoctrine()->getRepository(ContactMessage::class)->find($id);

        return $this->render('contact_message/form-show.html.twig', [
            'contactMessage' => $contactMessage
        ]);
    }

    /**
     * @Route("/edit/{id}", name="contact_edit")
     */
    public function edit($id, Request $request)
    {
        #Etape 1 recuperer l'objet à modifier
        $contactMessage = $this->getDoctrine()->getRepository(ContactMessage::class)->find($id);

        $formContactMessage = $this->createForm(ContactMessageType::class, $contactMessage);

        $formContactMessage->handleRequest($request);

        if ($formContactMessage->isSubmitted() &&   $formContactMessage->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->flush();

            $this->addFlash('contact-message_edit_success', 'Le message a bien été modifié!');

            return $this->redirectToRoute('contact_index');
        }

        return $this->render('contact_message/form-edit.html.twig', [
            'formContactMessage' => $formContactMessage->createView()
        ]);
    }

    /**
     * @Route("/delete/{id}", name="contact_delete")
     */
    public function delete($id)
    {
        #Etape 1 recuperer l'objet à supp
        $formContactMessage = $this->getDoctrine()->getRepository(ContactMessage::class)->find($id);

        #Etape 2 appeler l'entityManager de Doctrine pr ecrire dns la bdd
        $entityManager = $this->getDoctrine()->getManager();

        #Etape 3 supprimer l'objet recuperer via l'id
        $entityManager->remove($formContactMessage);

        #Etape 4 pas besoin du persist() pr enregistrer la suppression
        $entityManager->flush();

        $this->addFlash('contact_message_delete_success', 'Le message a bien été supprimé!');

        return $this->redirectToRoute('contactMessage_index');
    }
















}
