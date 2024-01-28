<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use App\Controller\GetEstablishmentsByPrestataireController;
use App\Dto\AssignManagerToEtabDto;
use App\Repository\EstablishmentRepository;
use App\State\AssignManagerToEstablishmentStateProcessor;
use App\State\CreateEstablishmentProcessor;
use App\State\GetEstablishmentByPrestataireStateProvider;
use App\State\GetEstablishmentStateProvider;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EstablishmentRepository::class)]
#[ApiResource(

    operations: [
        new Get(
            security: "is_granted('ROLE_ADMIN')",
//           security: "is_granted('ROLE_PRESTATAIRE') and object.getOwner() == user",
            securityMessage : "You don't have permission to access this page",
            normalizationContext :  ['groups' => ['establishment:read','prestation:read']]
        ),
        new GetCollection(
            security: "is_granted('ROLE_ADMIN') or (is_granted('ROLE_PRESTATAIRE') )",
            securityMessage : "You don't have permission to perform this action",
            provider : GetEstablishmentStateProvider::class ,
            validationContext: ['groups' => ['Default', 'establishment:read']],
            
            normalizationContext :  ['groups' => ['establishment:read'],['prestation:read'],['user:read']]
        ),
        new Patch (
//            verifier la codition
            security: "is_granted('ROLE_ADMIN') or (is_granted('ROLE_PRESTATAIRE') and object.getRelateTo().getOwner() == user) ",
            securityMessage : "You don't have permission to perform this action",
            denormalizationContext : ['groups' => ['establishment:update']],
            validationContext: ['groups' => ['Default', 'establishment:update']],
        ),
        new Post(
            security: "is_granted('ROLE_ADMIN') or is_granted('ROLE_PRESTATAIRE') ",
            securityMessage : "You don't have permission to perform this action",
            processor: CreateEstablishmentProcessor::class,
            denormalizationContext : ['groups' => ['establishment:create']],
            validationContext: ['groups' => ['Default', 'establishment:create']],
        ),
        new Patch(
            security: "is_granted('ROLE_ADMIN') or is_granted('ROLE_PRESTATAIRE') ",
            securityMessage : "You don't have permission to perform this action",
            processor: AssignManagerToEstablishmentStateProcessor ::class,
            input: AssignManagerToEtabDto::class ,
            uriTemplate: '/establishments/{id}/assignManager',
            normalizationContext :  ['groups' => ['establishment:read']]

        ),

        new Delete(
            //soit admin soit le prestataire propriétaire attention !!!
            security: "is_granted('ROLE_ADMIN')",
            securityMessage : "You don't have permission to perform this action",
        )

    ],


)]
class Establishment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups([
        'establishment:read'
    ])]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups([
            'establishment:read',
            'establishment:create',
            'prestataire:establishments:read',
            'prestation:read',
            'establishment:update'
    ])]
    #[Assert\NotBlank(groups: ['establishment:create'])]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups([
        'establishment:read',
        'establishment:create',
        'establishment:update',
        'prestataire:establishments:read',
        'prestation:read'
    ])]
    #[Assert\NotBlank(groups: ['establishment:create'])]
    private ?string $address = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups([
        'establishment:read',
        'establishment:create',
        'establishment:update',
        'prestataire:establishments:read']
    )]
    #[Assert\NotBlank(groups: ['establishment:create'])]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'establishment', targetEntity: User::class)]
    private Collection $employees;

    #[ORM\ManyToOne(inversedBy: 'establishments',cascade: ['remove'])]
    #[Groups(['establishment:create','establishment:read'])]

    private ?Prestataire $relateTo = null;

    #[ORM\OneToMany(mappedBy: 'establishment', targetEntity: Prestation::class, cascade: ['remove'])]
    private Collection $prestations;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['establishment:read','establishment:create','establishment:update','prestataire:establishments:read'])]
    #[Assert\NotBlank(groups: ['establishment:create'])]
    private ?string $image = null;

    #[ORM\ManyToOne(inversedBy: 'managedEstablishments')]
    #[Groups(['establishment:read'])]
    private ?User $manager = null;

    public function __construct()
    {
        $this->employees = new ArrayCollection();
        $this->prestations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getEmployees(): Collection
    {
        return $this->employees;
    }

    public function addEmployee(User $employee): static
    {
        if (!$this->employees->contains($employee)) {
            $this->employees->add($employee);
            $employee->setEstablishment($this);
        }

        return $this;
    }

    public function removeEmployee(User $employee): static
    {
        if ($this->employees->removeElement($employee)) {
            // set the owning side to null (unless already changed)
            if ($employee->getEstablishment() === $this) {
                $employee->setEstablishment(null);
            }
        }

        return $this;
    }

    public function getRelateTo(): ?Prestataire
    {
        return $this->relateTo;
    }

    public function setRelateTo(?Prestataire $relateTo): static
    {
        $this->relateTo = $relateTo;

        return $this;
    }

    /**
     * @return Collection<int, Prestation>
     */
    public function getPrestations(): Collection
    {
        return $this->prestations;
    }

    public function addPrestation(Prestation $prestation): static
    {
        if (!$this->prestations->contains($prestation)) {
            $this->prestations->add($prestation);
            $prestation->setEstablishment($this);
        }

        return $this;
    }

    public function removePrestation(Prestation $prestation): static
    {
        if ($this->prestations->removeElement($prestation)) {
            // set the owning side to null (unless already changed)
            if ($prestation->getEstablishment() === $this) {
                $prestation->setEstablishment(null);
            }
        }

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getManager(): ?User
    {
        return $this->manager;
    }

    public function setManager(?User $manager): static
    {
        $this->manager = $manager;

        return $this;
    }
}
