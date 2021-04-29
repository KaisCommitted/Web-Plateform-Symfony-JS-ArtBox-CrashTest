<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Postes
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="postes", indexes={@ORM\Index(name="ctn1", columns={"id_user"}), @ORM\Index(name="dsqd", columns={"categorie"})})
 * @ORM\Entity(repositoryClass="App\Repository\PostesRepository")
 */
class Postes
{


    /**
     * @var int
     *
     * @ORM\Column(name="id_post", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPost;
    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=50, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_post", type="string", length=30, nullable=false)
     */
    private $nomPost;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=255, nullable=false)
     */
    private $file;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $postDate = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="album_cover", type="string", length=255, nullable=true)
     */
    private $albumCover;

    /**
     * @var int
     *
     * @ORM\Column(name="Likes", type="integer", nullable=false)
     */
    private $likes = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="desc_analys", type="string", length=30, nullable=false)
     */
    private $descAnalys;

    /**
     * @var string
     *
     * @ORM\Column(name="post_type", type="string", length=30, nullable=false)
     */
    private $postType;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie", referencedColumnName="categorie_name")
     * })
     */
    private $categorie;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    private $upload;


    public function getIdPost(): ?int
    {
        return $this->idPost;
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

    public function getNomPost(): ?string
    {
        return $this->nomPost;
    }

    public function setNomPost(string $nomPost): self
    {
        $this->nomPost = $nomPost;

        return $this;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(string $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function getPostDate(): ?\DateTimeInterface
    {
        return $this->postDate;
    }

    public function setPostDate(\DateTimeInterface $postDate): self
    {
        $this->postDate = $postDate;   

        return $this;
    }

    public function getAlbumCover(): ?string
    {
        return $this->albumCover;
    }

    public function setAlbumCover(?string $albumCover): self
    {
        $this->albumCover = $albumCover;

        return $this;
    }

    public function getLikes(): ?int
    {
        return $this->likes;
    }

    public function setLikes(int $likes): self
    {
        $this->likes = $likes;

        return $this;
    }

    public function getDescAnalys(): ?string
    {
        return $this->descAnalys;
    }

    public function setDescAnalys(string $descAnalys): self
    {
        $this->descAnalys = $descAnalys;

        return $this;
    }

    public function getPostType(): ?string
    {
        return $this->postType;
    }

    public function setPostType(string $postType): self
    {
        $this->postType = $postType;

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



    public function __construct()
    {
        $this->postDate = new \DateTime('now');

    }




    /**
     * @return mixed
     */
    public function getUpload()
    {
        return $this->upload;
    }

    /**
     * @param mixed $upload
     */
    public function setUpload(UploadedFile $upload)
    {
        $this->upload = $upload;
    }

    public function getUploadDir()
    {
        return 'file';
    }

    public function getAbsolutRoot()
    {
        return $this->getUploadRoot().$this->file ;
    }

    public function getWebPath()
    {
        return $this->getUploadDir().'/'.$this->file;
    }

    public function getUploadRoot()
    {
        return __DIR__.'/../../public/'.$this->getUploadDir().'/';
    }

    public function upload()
    {

        if($this->upload === null){
            return;

        }
        $this->file = $this->upload->getClientOriginalName();
        if(!is_dir($this->getUploadRoot()))
        {
            mkdir($this->getUploadRoot(),'0777',true);
        }

        $this->upload->move($this->getUploadRoot(),$this->file);
        unset($this->upload);
    }






}