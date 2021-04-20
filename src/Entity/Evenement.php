<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Evenement
 * @UniqueEntity(fields={"nomEvent"} , message="Event name already exists")
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="ssss", columns={"type_event"}), @ORM\Index(name="id_org", columns={"id_org"}),@ORM\Index(columns={"nom_event", "description"}, flags={"fulltext"}), @ORM\Index(name="categorie", columns={"categorie"})} ,  uniqueConstraints={@ORM\UniqueConstraint(name="nom_event", columns={"nom_event"})})
 * @ORM\Entity(repositoryClass="App\Repository\EvenementRepository")
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     * @Assert\NotBlank(message="this field is required")
     * @ORM\Column(name="date", type="date", nullable=false)
     * @Assert\Type(
     *      type = "\DateTime",
     *      message = "Event date is not valid",
     * )
     * @Assert\GreaterThanOrEqual(
     *      value = "today",
     *      message = "Event date must be an upcoming date "
     * )
     */
    private $date;

    /**
     * @var string
     * @Assert\NotBlank(message="this field is required")
     * @ORM\Column(name="nom_event", type="string", length=255, nullable=false)
     */
    private $nomEvent;

    /**
     * @var string
     *@Assert\NotBlank(message="this field is required")
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var int
     * @Assert\NotBlank(message="this field is required")
     * @Assert\Positive(message="Event capacity must be positive")
     * @ORM\Column(name="capacite_event", type="integer", nullable=false)
     */
    private $capaciteEvent;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_max", type="integer", nullable=false)
     */
    private $nbMax /*= evenement->getCapaciteEvent()*/;

    /**
     * @var string
     *
     * @ORM\Column(name="image_event", type="string", length=255, nullable=false)
     */
    private $imageEvent;

    /**
     * @var string|null
     * @Assert\NotBlank(message="this field is required")
     * @ORM\Column(name="location_event", type="string", length=255, nullable=true)
     */
    private $locationEvent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rating_event", type="integer", nullable=true)
     */
    private $ratingEvent = '0';

    /**
     * @var \Categorie
     * @Assert\NotBlank(message="this field is required")
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie", referencedColumnName="categorie_name")
     * })
     */
    private $categorie;

    /**
     * @var \TypeEvent
     * @Assert\NotBlank(message="this field is required")
     * @ORM\ManyToOne(targetEntity="TypeEvent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_event", referencedColumnName="type_name",  onDelete="CASCADE")
     * })
     */
    private $typeEvent;

    /**
     * @var \User
     * @Assert\NotBlank(message="this field is required")
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_org", referencedColumnName="id_user")
     * })
     */
    private $idOrg;

    private $file;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getNomEvent(): ?string
    {
        return $this->nomEvent;
    }

    public function setNomEvent(string $nomEvent): self
    {
        $this->nomEvent = $nomEvent;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCapaciteEvent(): ?int
    {
        return $this->capaciteEvent;
    }

    public function setCapaciteEvent(int $capaciteEvent): self
    {
        $this->capaciteEvent = $capaciteEvent;

        return $this;
    }

    public function getNbMax(): ?int
    {
        return $this->nbMax;
    }

    public function setNbMax(int $nbMax): self
    {
        $this->nbMax = $nbMax;

        return $this;
    }

    public function getImageEvent(): ?string
    {
        return $this->imageEvent;
    }

    public function setImageEvent(string $imageEvent): self
    {
        $this->imageEvent = $imageEvent;

        return $this;
    }

    public function getLocationEvent(): ?string
    {
        return $this->locationEvent;
    }

    public function setLocationEvent(?string $locationEvent): self
    {
        $this->locationEvent = $locationEvent;

        return $this;
    }

    public function getRatingEvent(): ?int
    {
        return $this->ratingEvent;
    }

    public function setRatingEvent(?int $ratingEvent): self
    {
        $this->ratingEvent = $ratingEvent;

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

    public function getTypeEvent(): ?TypeEvent
    {
        return $this->typeEvent;
    }

    public function setTypeEvent(?TypeEvent $typeEvent): self
    {
        $this->typeEvent = $typeEvent;

        return $this;
    }

    public function getIdOrg(): ?User
    {
        return $this->idOrg;
    }

    public function setIdOrg(?User $idOrg): self
    {
        $this->idOrg = $idOrg;

        return $this;
    }






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

    public function __toString()
    {
        return $this->nomEvent;
    }

     public function initializeNb(Evenenemnt $evenement)
     {
         $this->setNbMax($this->getCapaciteEvent());
    }

}