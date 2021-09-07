<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;

class UtlisateurController extends AbstractController
{
    /**
     * @Route("/utilisateur", name="utlisateur")
     */
 
    public function showProduct()
    {
        $produits = $this->getDoctrine()->getRepository(Product::class)->findAll();
        return $this->render('utlisateur/index.html.twig', [
            'products' => $produits,
        ]);
    }
}
