<?php
# api/src/State/UserPasswordHasher.php

namespace App\State;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

final readonly class UserPasswordHasher implements ProcessorInterface
{
    public function __construct(private ProcessorInterface $processor,
                                private UserPasswordHasherInterface $passwordHasher,
                                private EntityManagerInterface $manager,
                                private JWTTokenManagerInterface $JWTManager)
    {
    }

    public function process($data, Operation $operation, array $uriVariables = [], array $context = [])
    {
        $pass = $data->getPassword();
        if (!$data->getPassword() || !$data->getConfirmPassword()) {
            throw new BadRequestHttpException('Password and confirm password must be provided.');
        }

        if ($data->getPassword() !== $data->getConfirmPassword()) {
            throw new BadRequestHttpException('Password and confirm password do not match.');
        }

        $user = new User();
        $user->setFirstname($data->getFirstname());
        $user->setLastname($data->getLastname());
        $user->setEmail($data->getEmail());

        $hashedPassword = $this->passwordHasher->hashPassword(
            $user,
            $data->getConfirmPassword()
        );
        $user->setConfirmPassword(null);
        $user->setPassword($hashedPassword);
        $user->eraseCredentials();

        $token = $this->JWTManager->create($user);
        $response = new JsonResponse(['user' => $user, 'token' => $token]);

        $this->manager->persist($user);
        $this->manager->flush();


        return $this->processor->process($user, $operation, $uriVariables, $context);
//        return $response;
    }
}