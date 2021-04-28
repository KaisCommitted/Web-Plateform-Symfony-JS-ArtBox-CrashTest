<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Categorie
 * @ORM\Table(name="categorie" ,indexes={ @ORM\Index(columns={"categorie_name"}, flags={"fulltext"})} ,uniqueConstraints={@ORM\UniqueConstraint(name="categorie_name", columns={"categorie_name"})})
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


    /**
     * @var string
     *
     * @ORM\Column(name="categorie_image", type="string", length=255, nullable=false)
     */
    private $categorieImage;


    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;




    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }





    public function getCategorieName(): ?string
    {
        return $this->categorieName;
    }

    public function setCategorieName(string $categorieName): self
    {
        $this->categorieName = $categorieName;

        return $this;
    }


    public function getCategorieImage(): ?string
    {
        return $this->categorieImage;
    }

    public function setCategorieImage(string $categorieImage): self
    {
        $this->categorieImage = $categorieImage;

        return $this;
    }


    private $file;

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile(UploadedFile $file)
    {
        $this->file = $file;
    }

    public function getUploadDir()
    {
        return 'imagesCategorie';
    }

    public function getAbsolutRoot()
    {
        return $this->getUploadRoot().$this->categorieImage ;
    }

    public function getWebPath()
    {
        return $this->getUploadDir().'/'.$this->categorieImage;
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
        $this->categorieImage = $this->file->getClientOriginalName();
        if(!is_dir($this->getUploadRoot()))
        {
            mkdir($this->getUploadRoot(),'0777',true);
        }

        $this->file->move($this->getUploadRoot(),$this->categorieImage);
        unset($this->file);
    }
    
    
    public function __toString()
    {
        return $this->categorieName;
    }


}
