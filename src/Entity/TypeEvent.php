<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * TypeEvent
 *
 * @ORM\Table(name="type_event")
 * @ORM\Entity(repositoryClass="App\Repository\TypeEventRepository")
 */
class TypeEvent
{
    /**
     * @var string
     *
     * @ORM\Column(name="type_name", type="string", length=255, nullable=false)
     * @ORM\Id
     * @Groups ("Events")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $typeName;

    /**
     * @param string $typeName
     */
    public function setTypeName(string $typeName): void
    {
        $this->typeName = $typeName;
    }

    public function getTypeName(): ?string
    {
        return $this->typeName;
    }
    public function __toString()
    {
        return $this->typeName;
    }

}