<?php

namespace App\DataFixtures;

use App\Entity\Establishment;
use App\Entity\Prestataire;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ObjectManager;
use App\Repository\UserRepository;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class DataFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function load(ObjectManager $manager): void
    {
        //user admin
        $admin = $this->createAdmin();
        $manager->persist($admin);

//        ----------------------------------------------------------------------
        //user with ROLE_PRESTATAIRE
        $userPresta1 = $this->createUserPresta1();
        $manager->persist($userPresta1);

        //create prestataire for user presta1 (normally it's with admin confirmation)
        $presta = new Prestataire();
        $presta->setName("RentProCar");
        $presta->setDescription("Rent a car for your professional needs with us !");
        $presta->setContactInfos("rent-pro-car@contact.com");
        $presta->setSector("Vehicule renting");
        $presta->setKbis("123 456 789 01234");
        $presta->setAddress("35 Grande allée du 12 Février 1934 77186 Noisiel");
        $presta->setStatus("Waiting for approval");
        $presta->setOwner($userPresta1);
        $manager->persist($presta);

        //create Establishments
        $establishment = new Establishment();
        $establishment->setName("RentProCar Paris");
        $establishment->setAddress("34 rue de paradis 75010 Paris");
        $establishment->setDescription("Rent a car for your professional needs with us in Paris !");
        $establishment->setRelateTo($presta);
        $establishment->setImage("image-url");
        $manager->persist($establishment);

        $establishment2 = new Establishment();
        $establishment2->setName("RentProCar Lyon");
        $establishment2->setAddress("38 rue de la paix 69000 Lyon");
        $establishment2->setDescription("Rent a car for your professional needs with us in Lyon !");
        $establishment2->setRelateTo($presta);
        $establishment2->setImage("image-url");
        $manager->persist($establishment2);

        $establishment3 = new Establishment();
        $establishment3->setName("RentProCar Nany");
        $establishment3->setAddress("43 rue de Saurupt 54000 Nancy");
        $establishment3->setDescription("Rent a car for your professional needs with us in Nancy !");
        $establishment3->setRelateTo($presta);
        $establishment3->setImage("image-url");
        $manager->persist($establishment3);

        //        ----------------------------------------------------------------------

        //user with ROLE_PRESTATAIRE
        $userPresta2 = new User();
        $userPresta2->setPassword($this->passwordHasher->hashPassword($userPresta2, "123456"));
        $userPresta2->setFirstname("presta2");
        $userPresta2->setLastname("presta2");
        $userPresta2->setEmail("presta2@presta2.com");
        $userPresta2->setRoles(['ROLE_PRESTATAIRE']);
        $manager->persist($userPresta2);

        //create prestataire for user presta1 (normally it's with admin confirmation)
        $presta2 = new Prestataire();
        $presta2->setName("CleanPro");
        $presta2->setDescription("Clean services for personnal or prefessional needs");
        $presta2->setContactInfos("clean-pro@contact.com");
        $presta2->setSector("Cleaning services");
        $presta2->setKbis("156 775 789 01234");
        $presta2->setAddress("26 rue de Grangclement 69100 Villeurbanne");
        $presta2->setStatus("Approved");
        $presta2->setOwner($userPresta2);
        $manager->persist($presta2);

        //create Establishments
        $establishment4 = new Establishment();
        $establishment4->setName("CleanPro Paris");
        $establishment4->setAddress("34 rue de paradis 75010 Paris");
        $establishment4->setDescription("Clean services for personnal or prefessional needs in Paris !");
        $establishment4->setRelateTo($presta2);
        $establishment4->setImage("image-url");
        $manager->persist($establishment4);

        $establishment5 = new Establishment();
        $establishment5->setName("CleanPro Lyon");
        $establishment5->setAddress("38 rue de la paix 69000 Lyon");
        $establishment5->setDescription("Clean services for personnal or prefessional needs in Lyon !");
        $establishment5->setRelateTo($presta2);
        $establishment5->setImage("image-url");
        $manager->persist($establishment5);

//        -------------------------------------------------------------------------------------------

        // Création d'un autre prestataire
        $presta3 = new Prestataire();
        $presta3->setName("CityBikeRentals");
        $presta3->setDescription("Explore the city on two wheels with our bike rental service!");
        $presta3->setContactInfos("info@citybikerentals.com");
        $presta3->setSector("Bicycle renting");
        $presta3->setKbis("987 654 321 09876");
        $presta3->setAddress("22 Rue de Rivoli, 75004 Paris");
        $presta3->setStatus("Approved");
        $presta3->setOwner($userPresta2); // Ajouter au $userPresta2
        $manager->persist($presta3);

// Création des établissements pour le deuxième prestataire
        $establishment6 = new Establishment();
        $establishment6->setName("CityBikeRentals Marseille");
        $establishment6->setAddress("15 Quai de Rive Neuve, 13007 Marseille");
        $establishment6->setDescription("Discover Marseille with our convenient bike rentals!");
        $establishment6->setRelateTo($presta3);
        $establishment6->setImage("image-url-marseille");
        $manager->persist($establishment6);

        $establishment7 = new Establishment();
        $establishment7->setName("CityBikeRentals Bordeaux");
        $establishment7->setAddress("18 Cours du Chapeau-Rouge, 33000 Bordeaux");
        $establishment7->setDescription("Enjoy Bordeaux at your own pace with our bikes!");
        $establishment7->setRelateTo($presta3);
        $establishment7->setImage("image-url-bordeaux");
        $manager->persist($establishment7);

        $establishment8 = new Establishment();
        $establishment8->setName("CityBikeRentals Lyon");
        $establishment8->setAddress("10 Rue de la Charité, 69002 Lyon");
        $establishment8->setDescription("Best way to explore Lyon - rent a bike from us!");
        $establishment8->setRelateTo($presta3);
        $establishment8->setImage("image-url-lyon");
        $manager->persist($establishment8);




        $manager->flush();

    }

    private function createAdmin() : User
    {
        $admin = new User();
        $admin->setPassword($this->passwordHasher->hashPassword($admin, "123456"));
        $admin->setFirstname("admin");
        $admin->setLastname("admin");
        $admin->setEmail("admin@admin.com");
        $admin->setRoles(['ROLE_ADMIN']);

        return $admin;
    }

    private function createUserPresta1() : User
    {
        $userPresta1 = new User();
        $userPresta1->setPassword($this->passwordHasher->hashPassword($userPresta1, "123456"));
        $userPresta1->setFirstname("presta1");
        $userPresta1->setLastname("presta1");
        $userPresta1->setEmail("presta1@presta1.com");
        $userPresta1->setRoles(['ROLE_PRESTATAIRE']);

        return $userPresta1;
    }

    private function createPrestaForUser1()
    {
        $presta = new Prestataire();
        $presta->setName("RentProCar");
        $presta->setDescription("Rent a car for your professional needs with us !");
        $presta->setContactInfos("rent-pro-car@contact.com");
        $presta->setSector("Vehicule renting");
        $presta->setKbis("123 456 789 01234");
        $presta->setAddress("35 Grande allée du 12 Février 1934 77186 Noisiel");
        $presta->setStatus("Approved");

    }
}
