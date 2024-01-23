<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Establishment;
use App\Entity\Prestataire;
use App\Entity\Prestation;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ObjectManager;
use App\Repository\UserRepository;
use Faker\Generator;
use Faker\Provider;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\Common\Collections\Collection;
class DataFixtures extends Fixture
{
    private readonly Generator $faker;
    public function __construct(
        private readonly UserPasswordHasherInterface $passwordHasher,

    )
    {
        $faker = new Generator();
        $faker->addProvider(new Provider\fr_FR\Person($faker));
        $faker->addProvider(new Provider\fr_FR\Address($faker));
        $faker->addProvider(new Provider\fr_FR\PhoneNumber($faker));
        $faker->addProvider(new Provider\fr_FR\Company($faker));
        $faker->addProvider(new Provider\Lorem($faker));
        $faker->addProvider(new Provider\Internet($faker));
        $faker->addProvider(new Provider\Image($faker));

        $this->faker = $faker;
    }

    public function load(ObjectManager $manager): void
    {
        //simple users
        for($i=0; $i<10; $i++)
        {
            $user = $this->createUser("user$i", "user$i", ['ROLE_USER']);
            $manager->persist($user);
        }

        //user admin
        $admin = $this->createUser("admin", "admin",['ROLE_ADMIN']);
        $manager->persist($admin);

//        ----------------------------------------------------------------------
        //user with ROLE_PRESTATAIRE
        $userPresta1 = $this->createUser("presta1", "presta2",['ROLE_PRESTATAIRE']);
        $manager->persist($userPresta1);
        //create prestataire for user presta1 (normally it's with admin confirmation)
        $presta = $this->createPrestataire("RentProCar", "Waiting for approuval" , "Renting cars");
        $presta->setOwner($userPresta1);
        $manager->persist($presta);
        //create Establishments
        $establishment = $this->createEtablissement("RentProCar");
        $establishment->setRelateTo($presta);

        $prestation1 = $this->createPrestation("Rent Express");
        $category1 = $this->createCategoriy("Professional renting");
        $manager->persist($category1);
        $prestation1->setCategory($category1);
        $manager->persist($prestation1);
        $establishment->addPrestation($prestation1);
        $manager->persist($establishment);

        $establishment2 = $this->createEtablissement("RentProCar");
        $establishment2->setRelateTo($presta);
        $establishment2->addPrestation($prestation1);
        $manager->persist($establishment2);


        $establishment3 = $this->createEtablissement("RentProCar");
        $establishment3->setRelateTo($presta);
        $establishment3->addPrestation($prestation1);
        $manager->persist($establishment3);

        //----------------------------------------------------------------------

        //user with ROLE_PRESTATAIRE
        $userPresta2 = $this->createUser("presta2", "presta2", ['ROLE_PRESTATAIRE']);
        $manager->persist($userPresta2);

        //create prestataire for user presta1 (normally it's with admin confirmation)
        $presta2 = $this->createPrestataire("CleanPro", "Approuved" , "Cleaning services");
        $presta2->setOwner($userPresta2);
        $manager->persist($presta2);

        /**/
        $establishment4 = $this->createEtablissement("CleanPro");
        $establishment4->setRelateTo($presta2);

        $prestation2 = $this->createPrestation("Express Cleaning");
        $category2 = $this->createCategoriy("Professional cleaning");
        $manager->persist($category2);
        $prestation2->setCategory($category2);
        $manager->persist($prestation2);
        $establishment->addPrestation($prestation1);
        $manager->persist($establishment4);

        $establishment5 = $this->createEtablissement("CleanPro");
        $establishment5->setRelateTo($presta2);
        $establishment5->addPrestation($prestation2);
        $manager->persist($establishment5);


        $establishment6 = $this->createEtablissement("CleanPro");
        $establishment6->setRelateTo($presta2);
        $establishment6->addPrestation($prestation2);
        $manager->persist($establishment6);
        /**/

        //-------------------------------------------------------------------------------------------

        // Création d'un autre prestataire

        $presta3 = $this->createPrestataire("CityBikeRentals", "Approuved" , "Bicycle renting");
        $presta3->setOwner($userPresta2);
        $manager->persist($presta3);

        $establishment7 = $this->createEtablissement("CityBikeRentals");
        $establishment7->setRelateTo($presta3);

        $prestation3 = $this->createPrestation("Bike ride in the city");
        $category3 = $this->createCategoriy("City bike Renting");
        $manager->persist($category3);
        $prestation3->setCategory($category3);
        $manager->persist($prestation3);
        $establishment7->addPrestation($prestation3);
        $manager->persist($establishment7);

        $establishment8 = $this->createEtablissement("CityBikeRentals");
        $establishment8->setRelateTo($presta3);
        $establishment8->addPrestation($prestation3);
        $manager->persist($establishment8);

        $establishment9 = $this->createEtablissement("CityBikeRentals");
        $establishment9->setRelateTo($presta3);
        $establishment9->addPrestation($prestation3);
        $manager->persist($establishment9);

        $prestation4 = $this->createPrestation("1 hour bike ride");
        $prestation4->setCategory($category3);
        $manager->persist($prestation4);
        $establishment10 = $this->createEtablissement("CityBikeRentals");
        $establishment10->setRelateTo($presta3);
        $establishment10->addPrestation($prestation4);
        $manager->persist($establishment10);



        $manager->flush();

    }


    private function createUser(string $firstname, string $lastname, $roles ) : User
    {
        $user = new User();
        $user->setPassword($this->passwordHasher->hashPassword($user, "123456"));
        $user->setFirstname($firstname);
        $user->setLastname($lastname);
        $user->setEmail("$firstname@$lastname.com");
        $user->setRoles($roles);
        return $user;
    }


    private function createPrestataire($name, $status,$sector) : Prestataire
    {
        $presta = new Prestataire();
        $presta->setName($name);
        $presta->setDescription($this->faker->text(50));
        $presta->setContactInfos("$name@contact.com");
        $presta->setSector($sector);
        $presta->setKbis("123 456 789 01234");
        $presta->setAddress($this->faker->address());
        $presta->setStatus($status);

        $imageUrl = $this->faker->imageUrl(640,480,"dog",true);
        $presta->setImage($imageUrl);

        return $presta;
    }


    private function createPrestation($name) : Prestation
    {
        $prestation = new Prestation();
        $prestation->setName($name);
        $prestation->setDescription($this->faker->text(50));
        $prestation->setPrice($this->faker->numberBetween(10,100));
        $prestation->setDuration(24);

        return $prestation;
    }


    private function createEtablissement($name) : Establishment{

        $streetAdress = $this->faker->streetAddress();
        $postCode = $this->faker->postcode();
        $city = $this->faker->city();

        $fullAdress = $streetAdress .', ' . $postCode . ' '. $city;

        $establishment = new Establishment();
        $establishment->setName("$name $city");
        $establishment->setAddress($fullAdress);
        $establishment->setDescription($this->faker->text(50) . "in $city !");
//        $establishment->setRelateTo($presta);
        $establishment->setImage($this->faker->imageUrl());

        return $establishment;
    }

    private function createCategoriy($categoryName) : Category {

        $category = new Category();
        $category->setDescription("Description of the category");
        $category->setName($categoryName);
        return $category;
    }
}
