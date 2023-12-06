<?php

namespace App\State;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;
use App\Entity\User;
use App\Repository\PrestataireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\Mailer\MailerInterface;

class GetEstablishmentByPrestataireStateProvider implements ProviderInterface
{
    public function __construct(
        private readonly PrestataireRepository $prestataireRepo,
        private readonly  Security $security
    ) {}
    public function provide(Operation $operation, array $uriVariables = [], array $context = []): object|array|null
    {
        /* @var User $owner */
        $owner = $this->security->getUser();
        if (!$owner) {
            throw new UnauthorizedHttpException('User does not existe');
        }

        $prestataire =  $this->prestataireRepo->findOneBy(['id'=>$uriVariables['id']]);

        //check weather user is the owner of the presta
        if($owner != $prestataire->getOwner())
        {
            throw new UnauthorizedHttpException('User does not the owner of the prestation');
        }

        return $prestataire->getEstablishments();

    }
}
