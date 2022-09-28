<?php

namespace App\Controller\Admin;

use App\Entity\Technicien;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TechnicienCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Technicien::class;
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
