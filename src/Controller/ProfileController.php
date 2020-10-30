<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     */
    public function index()
    {
        return $this->render('profile/index.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }
    /**
     * @Route("/",name="home")
     */
    public function home() {
        return $this->render('profile/home.html.twig');
    }
    /**
     * @Route("/formation",name="formation")
     */
    public function formation() {
        return $this->render('profile/formation.html.twig');
    }
     /**
     * @Route("/experience",name="experience")
     */
    public function experience() {
        return $this->render('profile/experience.html.twig');
    }
     /**
     * @Route("/competence",name="competence")
     */
    public function competence() {
        return $this->render('profile/competence.html.twig');
    }
}
