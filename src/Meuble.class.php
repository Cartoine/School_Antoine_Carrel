<?php

class Meuble extends Surfaces
{
    public function __construct(int $largeur, int $hauteur, int $profondeur, string $nom)
    {
        parent::__construct($largeur, $hauteur, $profondeur, $nom);
    }

    public function getSurfaces()
    {
    }

    // Pour afficher 

    public function __toString()
    {
        return self::class . "\nNom : " . $this->getNom() . "\nLargeur : " . $this->getLargeur() . "cm" . "\nHauteur : " . $this->getHauteur() . "\nProfondeur : " . $this->getProfondeur() . "cm";
    }
}
