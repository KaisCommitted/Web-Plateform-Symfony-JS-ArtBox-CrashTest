<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Feedback
 *
 * @ORM\Table(name="feedback", indexes={@ORM\Index(name="fk_usee", columns={"id_user"})})
 * @ORM\Entity(repositoryClass="App\Repository\FeedbackRepository")
 */
class Feedback
{
    /**
     * @var int
     * @Groups("Feedback")
     * @ORM\Column(name="id_feedback", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFeedback;

    /**
     * @var string
     * @Groups("Feedback")
     * @ORM\Column(name="contenu_feedback", type="string", length=255, nullable=false)
     */
    private $contenuFeedback;

    /**
     * @var string
     * @Groups("Feedback")
     * @ORM\Column(name="type_feedback", type="string", length=30, nullable=false)
     */
    private $typeFeedback;

    /**
     * @var string
     * @Groups("Feedback")
     * @ORM\Column(name="etat_feedback", type="string", length=30, nullable=false)
     */
    private $etatFeedback;

    /**
     * @var \DateTime
     * @Groups("Feedback")
     * @ORM\Column(type="datetime")
     *
     */
    private $dateFeedback;



    /**
     * @var \User
     * @Groups("Feedback")
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    public function getIdFeedback(): ?int
    {
        return $this->idFeedback;
    }

    public function getContenuFeedback(): ?string
    {
        return $this->contenuFeedback;
    }

    public function setContenuFeedback(string $contenuFeedback): self
    {
        $this->contenuFeedback = $contenuFeedback;

        return $this;
    }

    public function getTypeFeedback(): ?string
    {
        return $this->typeFeedback;
    }

    public function setTypeFeedback(string $typeFeedback): self
    {
        $this->typeFeedback = $typeFeedback;

        return $this;
    }

    public function getEtatFeedback(): ?string
    {
        return $this->etatFeedback;
    }

    public function setEtatFeedback(string $etatFeedback): self
    {
        $this->etatFeedback = $etatFeedback;

        return $this;
    }

    public function getDateFeedback(): ?\DateTimeInterface
    {
        return $this->dateFeedback;
    }

    public function setDateFeedback(\DateTimeInterface $dateFeedback): self
    {
        $this->dateFeedback = $dateFeedback;

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
        $this->dateFeedback= new \DateTime();
    }
 /* */
}