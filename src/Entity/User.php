<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields={"username"}, message="There is already an account with this username")
 */
class User implements UserInterface
{
    /**
     * @var int
     * @Groups("User")
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     * @Groups("User")
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     * @Groups("User")
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     * @Groups("User")
     * @ORM\Column(name="username", type="string", length=255, nullable=false, unique=true)
     */
    private $username;

    /**
     * @var string
     * @Groups("User")
     * @ORM\Column(name="mail", type="string", length=255, nullable=false, unique=true)


     */
    private $mail;

    /**
     * @var string
     * @Groups("User")
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;





    /**
     * @var \DateTime
     * @Groups("User")
     * @ORM\Column(name="date_naissance", type="date", nullable=false)
     */
    private $dateNaissance;

    /**
     * @var string
     * @Groups("User")
     * @ORM\Column(name="pwd_user", type="string", length=255, nullable=false)
     */
    private $pwdUser;

// new attribute ? ---------------------

    /**
     * @Groups("User")
     * @ORM\Column(type="json")
     */
    private $roles = [];



    /**
     * @var string
     * @Groups("User")
     * @ORM\Column(name="ref_admin", type="string", length=1, nullable=false)
     */
    private $refAdmin;

    /**
     * @var int|null
     * @Groups("User")
     * @ORM\Column(name="id_label", type="integer", nullable=true)
     */
    private $idLabel;
    private $file;

//    /**
//     * @ORM\Column(type="boolean")
//     */
//    private $isVerified;


    /**
     * @return string
     * @Groups("User")
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @Groups("User")
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }


    /**
     * @return mixed
     * @Groups("User")
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     * @Groups("User")
     */
    public function setFile(UploadedFile $file)
    {
        $this->file = $file;
    }

    public function getUploadDir()
    {
        return 'imagesEvent';
    }

    public function getAbsolutRoot()
    {
        return $this->getUploadRoot().$this->imageEvent ;
    }

    public function getWebPath()
    {
        return $this->getUploadDir().'/'.$this->imageEvent;
    }

    public function getUploadRoot()
    {
        return __DIR__.'/../../public/'.$this->getUploadDir().'/';
    }

    public function upload()
    {

        if($this->file === null){
            return;

        }
        $this->imageEvent = $this->file->getClientOriginalName();
        if(!is_dir($this->getUploadRoot()))
        {
            mkdir($this->getUploadRoot(),'0777',true);
        }

        $this->file->move($this->getUploadRoot(),$this->imageEvent);
        unset($this->file);
    }



    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getPwdUser(): ?string
    {
        return $this->pwdUser;
    }

    public function setPwdUser(string $pwdUser): self
    {
        $this->pwdUser = $pwdUser;

        return $this;
    }

    public function getRefAdmin(): ?string
    {
        return $this->refAdmin;
    }

    public function setRefAdmin(string $refAdmin): self
    {
        $this->refAdmin = $refAdmin;

        return $this;
    }

    public function getIdLabel(): ?int
    {
        return $this->idLabel;
    }

    public function setIdLabel(?int $idLabel): self
    {
        $this->idLabel = $idLabel;

        return $this;
    }
    public function __toString()
    {
        return $this->username;
    }

    public function getIsVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        $roles = $this->roles;
//        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @inheritDoc
     */
    public function getPassword(): ?string
    {
        return (string)$this->pwdUser;

    }
    public function setPassword(string $pwdUser): self
    {
        $this->pwdUser = $pwdUser;

        return $this;
    }
    /**
     * @inheritDoc
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}