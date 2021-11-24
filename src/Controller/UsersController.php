<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\UsersType;
use App\Repository\UsersRepository;
use App\Security\LoginFormAuthenticator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;



/**
 * @Route("/users", name="users_")
 */
class UsersController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(UsersRepository $usersRepo): Response
    {   
        $users = $usersRepo-> findAll();

        return $this->render('users/index.html.twig', [
            'users' => $users
        ]);
    }

    /**
     * @Route("/add", name="users_add")
     */
    public function add(Request$request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, LoginFormAuthenticator $authenticator): Response
    {
        $users = new Users;
        $users->setInscriptionAt(new \DateTime());
        //dd($this->getUser());
        //$users->setCategories($this->getAnimalType());

        $formUsers = $this->createForm(UsersType::class, $users);

        $formUsers->handleRequest($request);

        if ($formUsers->isSubmitted() && $formUsers->isValid()) {
            $users->setPassword(
                $passwordEncoder->encodePassword(
                    $users,
                    $formUsers->get('password')->getData()
                )
            );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($users);
            $entityManager->flush();

            $this->addFlash('users_add_success', 'Bienvenue!');

            return $this->redirectToRoute('users_index');
        }


        return $this->render('users/form-add.html.twig', [
            'formUsers' => $formUsers->createView()
        ]);
    }

    /**
     * @Route("/show/{id}", name="users_detail")
     */
    public function show($id)
    {   
        $users = $this->getDoctrine()->getRepository(Users::class)->find($id);

        return $this->render('users/form-show.html.twig', [
            'users' => $users
        ]);
    }

    /**
     * @Route("/edit/{id}", name="users_edit")
     */
    public function edit($id, Request $request)
    {
        #Etape 1 recuperer l'objet à modifier
        $users = $this->getDoctrine()->getRepository(Users::class)->find($id);

        $formUsers = $this->createForm(UsersType::class, $users);

        $formUsers->handleRequest($request);

        if ($formUsers->isSubmitted() && $formUsers->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->flush();

            $this->addFlash('users_edit_success', 'L\'Utilisateur a bien été modifié!');

            return $this->redirectToRoute('users_index');
        }

        return $this->render('users/form-edit.html.twig', [
            'formUsers' => $formUsers->createView()
        ]);
    }

    /**
     * @Route("/delete/{id}", name="users_delete")
     */
    public function delete($id)
    {
        #Etape 1 recuperer l'objet à supp
        $formUsers = $this->getDoctrine()->getRepository(Users::class)->find($id);

        #Etape 2 appeler l'entityManager de Doctrine pr ecrire dns la bdd
        $entityManager = $this->getDoctrine()->getManager();

        #Etape 3 supprimer l'objet recuperer via l'id
        $entityManager->remove($formUsers);

        #Etape 4 pas besoin du persist() pr enregistrer la suppression
        $entityManager->flush();

        $this->addFlash('users_delete_success', 'L\'Utilisateur a bien été supprimé!');

        return $this->redirectToRoute('users_index');
    }

























}
