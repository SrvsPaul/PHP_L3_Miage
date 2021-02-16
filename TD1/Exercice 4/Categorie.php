<?php

namespace MesCategories;

class Categorie
{
    private string $categorie;

    public function __construct(string $categorie)
    {
        $this->categorie=$categorie;
    }

    /**
     * @return string
     */
    public function getCategorie(): string
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     */
    public function setCategorie(string $categorie): void
    {
        $this->categorie = $categorie;
    }

    public function __toString()
    {
        return $this->categorie;
    }
}