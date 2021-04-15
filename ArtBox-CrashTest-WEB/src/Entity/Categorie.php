<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Categorie
 * @ORM\Table(name="categorie", uniqueConstraints={@ORM\UniqueConstraint(name="categorie_name", columns={"categorie_name"})})
 * @UniqueEntity(fields={"categorieName"} , message="Category already exists")
 * @ORM\Entity(repositoryClass="App\Repository\CategorieRepository")
 */
class Categorie
{
    /**
     * @var string
     * @Assert\NotBlank(message="this field is required")
     * @ORM\Column(name="categorie_name", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $categorieName;

    public function getCategorieName(): ?string
    {
        return $this->categorieName;
    }

    public function setCategorieName(string $categorieName): self
    {
        $this->categorieName = $categorieName;

        return $this;
    }
    public function __toString()
    {
        return $this->categorieName;
    }


}
