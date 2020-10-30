<?php

namespace App\Controller;

use App\Entity\Ville;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VilleController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('ville/index.html.twig');
    }

    /**
     * @Route("/villes", name="villes")
     */
    public function villes()
    {
        Ville::creerVilles();
        $villes = Ville::$touteslesvilles;
        return $this->render('ville/villes.html.twig',compact("villes"));
    }

       /**
     * @Route("/villes/{nom}", name="afficher_ville")
     */
    public function afficherVille($nom)
    {
        Ville::creerVilles();
        $ville = Ville::getVilleParNom($nom);
        return $this->render('ville/ville.html.twig',compact("ville"));

    }

 }
