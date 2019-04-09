<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BookRepository")
 */
class Book
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $PocetStran;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Autor;

    /**
     * @ORM\Column(type="integer")
     */
    private $RokVydani;

    /**
     * @ORM\Column(type="float")
     */
    private $Cena;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPocetStran(): ?int
    {
        return $this->PocetStran;
    }

    public function setPocetStran(int $PocetStran): self
    {
        $this->PocetStran = $PocetStran;

        return $this;
    }

    public function getAutor(): ?string
    {
        return $this->Autor;
    }

    public function setAutor(string $Autor): self
    {
        $this->Autor = $Autor;

        return $this;
    }

    public function getRokVydani(): ?int
    {
        return $this->RokVydani;
    }

    public function setRokVydani(int $RokVydani): self
    {
        $this->RokVydani = $RokVydani;

        return $this;
    }

    public function getCena(): ?float
    {
        return $this->Cena;
    }

    public function setCena(float $Cena): self
    {
        $this->Cena = $Cena;

        return $this;
    }
}
