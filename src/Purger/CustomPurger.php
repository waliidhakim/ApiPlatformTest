<?php

//namespace App\Purger;
//
//
//use Doctrine\Common\DataFixtures\Purger\ORMPurgerInterface;
//use Doctrine\DBAL\Exception;
//use Doctrine\ORM\EntityManagerInterface;
//
//class CustomPurger implements ORMPurgerInterface
//{
//    public function __construct(private readonly EntityManagerInterface $entityManager)
//    {
//
//    }
//
//    public function purge() : void
//    {
//        $this->setEntityManager($this->entityManager);
//        $conn = $this->entityManager->getConnection();
//
//        try {
//            $conn->beginTransaction();
//            $conn->executeQuery('DELETE FROM establishment');
//            $conn->executeQuery('DELETE  FROM prestataire');
//            $conn->executeQuery('DELETE  FROM "user"');
//        } catch (Exception $e) {
//            $conn->rollBack(); // Annuler la transaction en cas d'erreur
//            throw $e;
//        }
//
//
//    }
//
//    public function setEntityManager(EntityManagerInterface $em)
//    {
//
//    }
//}


namespace App\Purger;

use Doctrine\Common\DataFixtures\Purger\ORMPurgerInterface;
use Doctrine\ORM\EntityManagerInterface;

class CustomPurger implements ORMPurgerInterface
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function purge(): void
    {
        $conn = $this->entityManager->getConnection();

        try {
            $conn->beginTransaction();
            $conn->executeQuery('DELETE FROM prestation');
            $conn->executeQuery('DELETE FROM category');
            $conn->executeQuery('DELETE FROM establishment');
            $conn->executeQuery('DELETE FROM prestataire');
            $conn->executeQuery('DELETE FROM "user"');
            $conn->commit(); // Valider la transaction
        } catch (\Exception $e) {
            $conn->rollBack(); // Annuler la transaction en cas d'erreur
            throw $e;
        }
    }

    public function setEntityManager(EntityManagerInterface $entityManager): void
    {
        $this->entityManager = $entityManager;
    }
}

