<?php

namespace App\Controller\Admin;

use App\Entity\Artiste;
use App\Entity\Billet;
use App\Entity\Client;
use App\Entity\Concert;
use App\Entity\Groupe;
use App\Entity\Technicien;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
                $routeBuilder = $this->container->get(AdminUrlGenerator::class);
                $url = $routeBuilder->setController(ConcertCrudController::class)->generateUrl();

                return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('<img src="https://zupimages.net/up/22/38/ffye.png" alt="logo"></img>');
    }

    public function configureMenuItems(): iterable
    {
               yield MenuItem::linkToCrud('Concert', 'fas fa-guitar', Concert::class);
               yield MenuItem::linkToCrud('Groupe', 'fas fa-users-between-lines', Groupe::class);
               yield MenuItem::linkToCrud('Billet', 'fas fa-ticket-simple', Billet::class);
               yield MenuItem::linkToCrud('Client', 'fas fa-user', Client::class);
               yield MenuItem::linkToCrud('Artiste', 'fas fa-people-group', Artiste::class);
               yield MenuItem::linkToCrud('Technicien', 'fas fa-microchip', Technicien::class);
    }
}
