<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Rdv;
use App\Entity\Rapport;
use App\Entity\Patient;
use App\Entity\Etudiant;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Clinique');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Comptes', 'fa fa-user', User::class);
        //yield MenuItem::linkToCrud('Rendez Vous', 'fa fa-calendar-alt', Rdv::class);
        //yield MenuItem::linkToCrud('Rapport', 'fa fa-clipboard-list', Rapport::class);
        //yield MenuItem::linkToCrud('Patient', 'fa fa-book-medical', Patient::class);
        //yield MenuItem::linkToCrud('Etudiant', 'fa fa-book', Etudiant::class);
    }
}
