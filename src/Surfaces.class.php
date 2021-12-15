<?php

abstract class Surfaces
{
    /**
     * La largeur d'une salle de classe
     * ou la largeur d'un meuble
     *
     * @var int
     */
    protected $largeur;

    /**
     * La hauteur d'une salle de classe
     * ou la hauteur d'un meuble
     *
     * @var int
     */
    protected $hauteur;

    /**
     * La prog-fondeur d'une salle de classe
     * ou la profondeur d'un meuble
     *
     * @var int
     */
    protected $profondeur;

    /**
     * Le nom de la salle
     * ou le nom de d'un meuble
     *
     * @var string
     */
    protected $nom;

    // Je créer mon contructeur de surface
    public function __construct(int $largeur, int $hauteur, int $profondeur, string $nom)
    {
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
        $this->profondeur = $profondeur;
        $this->nom = $nom;
    }

    // Getter et Setter + typage de ces dernier

    /**
     * Get ou la largeur d'un meuble
     *
     * @return  int
     */
    public function getLargeur(): int
    {
        return $this->largeur;
    }

    /**
     * Set ou la largeur d'un meuble
     *
     * @param  int  $largeur  ou la largeur d'un meuble
     *
     * @return  self
     */
    public function setLargeur(int $largeur): self
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get ou la hauteur d'un meuble
     *
     * @return  int
     */
    public function getHauteur(): int
    {
        return $this->hauteur;
    }

    /**
     * Set ou la hauteur d'un meuble
     *
     * @param  int  $hauteur  ou la hauteur d'un meuble
     *
     * @return  self
     */
    public function setHauteur(int $hauteur): self
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    /**
     * Get ou la profondeur d'un meuble
     *
     * @return  int
     */
    public function getProfondeur(): int
    {
        return $this->profondeur;
    }

    /**
     * Set ou la profondeur d'un meuble
     *
     * @param  int  $profondeur  ou la profondeur d'un meuble
     *
     * @return  self
     */
    public function setProfondeur(int $profondeur): self
    {
        $this->profondeur = $profondeur;

        return $this;
    }

    /**
     * Get ou le nom de d'un meuble
     *
     * @return  string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set ou le nom de d'un meuble
     *
     * @param  string  $nom  ou le nom de d'un meuble
     *
     * @return  self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    abstract function getSurfaces();
}
