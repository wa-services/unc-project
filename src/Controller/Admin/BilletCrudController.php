<?php

namespace App\Controller\Admin;

use App\Entity\Billet;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BilletCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Billet::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
