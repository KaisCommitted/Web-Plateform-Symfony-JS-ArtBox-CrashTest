<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * Annonce
 *
 * @ORM\Table(name="annonce", indexes={@ORM\Index(name="fk_userrrrr", columns={"id_user"}), @ORM\Index(name="cattt", columns={"categorie"})})
 * @ORM\Entity(repositoryClass="App\Repository\AnnonceRepository")
 */
class Annonce
{
    /**
     * @var int
     * @Groups("Annonce")
     * @ORM\Column(name="id_ann", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnn;

    /**
     * @var string
     * @Groups("Annonce")
     * @Assert\NotBlank(message="This field is required")
     * @ORM\Column(name="titre_ann", type="string", length=250, nullable=false)
     */
    private $titreAnn;

    /**
     * @var string
     * @Groups("Annonce")
     * @Assert\NotBlank(message="This field is required")
     * @ORM\Column(name="desc_ann", type="string", length=250, nullable=false)
     */
    private $descAnn;

    /**
     * @var int
     * @Groups("Annonce")
     * @Assert\NotBlank(message="This field is required")
     * @Assert\Positive(message="Salary must be positive")
     * @ORM\Column(name="pay", type="integer", nullable=false)
     */
    private $pay;

    /**
     * @var \DateTime
     * @Groups("Annonce")
     * @Assert\NotBlank(message="This field is required")
     * @ORM\Column(name="ddl_ann", type="date", nullable=false)
     * @Assert\GreaterThanOrEqual(
     *      value = "today",
     *      message = "Application deadline must be an upcoming date "
     * ) */
    private $ddlAnn;

    /**
     * @var \Categorie
     * @Groups("Annonce")
     * @Assert\NotBlank(message="this field is required")
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie", referencedColumnName="categorie_name")
     * })
     */
    private $categorie;

    /**
     * @var \User
     * @Groups("Annonce")
     * @Assert\NotBlank(message="this field is required")
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    public function getIdAnn(): ?int
    {
        return $this->idAnn;
    }

    public function getTitreAnn(): ?string
    {
        return $this->titreAnn;
    }

    public function setTitreAnn(string $titreAnn): self
    {
        $this->titreAnn = $titreAnn;

        return $this;
    }

    public function getDescAnn(): ?string
    {
        return $this->descAnn;
    }

    public function setDescAnn(string $descAnn): self
    {
        $this->descAnn = $descAnn;

        return $this;
    }

    public function getPay(): ?int
    {
        return $this->pay;
    }

    public function setPay(int $pay): self
    {
        $this->pay = $pay;

        return $this;
    }

    public function getDdlAnn(): ?\DateTimeInterface
    {
        return $this->ddlAnn;
    }

    public function setDdlAnn(\DateTimeInterface $ddlAnn): self
    {
        $this->ddlAnn = $ddlAnn;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }


}