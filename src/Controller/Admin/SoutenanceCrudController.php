<?php

namespace App\Controller\Admin;

use App\Entity\Soutenance;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class SoutenanceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Soutenance::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
            DateTimeField::new('date')
            ->setFormat('dd/MM/yyyy HH:mm') // Personnalisez le format selon vos besoins
            ->setTimezone('Europe/Paris'),
        ];
    }

}
