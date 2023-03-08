<?php

namespace App\Controller;

use App\Entity\Client;

use App\Form\ClientType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{
    /**
     * @Route("/client", name="client")
     */
    public function index(): Response
    {
        // Création du formulaire
		$client = new Client();
		$form = $this->createForm(ClientType::class, $client);

        // Si formulaire pas encore soumis ou pas valide (affichage du formulaire)
        return $this->render('client/index.html.twig', array('form' => $form->createView()));
    }
}
