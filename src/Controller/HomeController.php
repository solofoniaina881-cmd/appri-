<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'titrepage' => 'Bienevenue dans notre application appri+ trek',
        ]);
    }

    //About
    #[Route('/about', name: 'app_about')]
    public function about(): Response{
        return $this->render('home/about.html.twig', [
            'titrepage' => 'Appri+.Trek about'
        ]);
    }

    //Activite
    #[Route('/activite', name: 'app_activite')]
    public function activite(): Response{
        return $this->render('home/activite.html.twig', [
            'titrepage' => 'Appri+.Trek Activite'
        ]);
    }

    //blog
    #[Route('/blog', name: 'app_blog')]
    public function blog(): Response{
        return $this->render('home/blog.html.twig', [
            'titrepage' => 'Appri+.Trek blog'
        ]);
    }

    //services
    #[Route('/service', name: 'app_service')]
    public function services(): Response{
        return $this->render('home/service.html.twig', [
            'titrepage' => 'Appri+.Trek Service'
        ]);
    }

    //contact
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response{
        return $this->render('home/contact.html.twig', [
            'titrepage' => 'Appri+.Trek contact'
        ]);
    }
    
}
