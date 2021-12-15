<?php
class ClassRooms extends  InQuantity
{

    /**
     * largeur de la classe
     *
     * @var int
     */
    protected $largeur;

    /**
     * Hauteur de la classe
     *
     * @var int
     */
    protected $hauteur;

    /**
     * profondeur de la classe
     *  
     * @var int
     */
    protected $profondeur;

    /**
     * Adresse de l'ecole
     *
     * @var string
     */
    protected $nom;

    public function __construct(string $nom, int $quantityMax, int $quantity, array $arrayContent, int $largeur, int $hauteur, int $profondeur)
    {
        parent::__construct($quantityMax, $quantity, $arrayContent, $largeur, $hauteur, $profondeur, $nom);
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
        $this->profondeur = $profondeur;
        $this->nom = $nom;
    }

    public function getInQuantity()
    {
    }


    /**
     * Get largeur de la classe
     *
     * @return  int
     */
    public function getLargeur(): int
    {
        return $this->largeur;
    }

    /**
     * Set largeur de la classe
     *
     * @param  int  $largeur  largeur de la classe
     *
     * @return  self
     */
    public function setLargeur(int $largeur): self
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get hauteur de la classe
     *
     * @return  int
     */
    public function getHauteur(): int
    {
        return $this->hauteur;
    }

    /**
     * Set hauteur de la classe
     *
     * @param  int  $hauteur  Hauteur de la classe
     *
     * @return  self
     */
    public function setHauteur(int $hauteur): self
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    /**
     * Get profondeur de la classe
     *
     * @return  int
     */
    public function getProfondeur(): int
    {
        return $this->profondeur;
    }

    /**
     * Set profondeur de la classe
     *
     * @param  int  $profondeur  profondeur de la classe
     *
     * @return  self
     */
    public function setProfondeur(int $profondeur): self
    {
        $this->profondeur = $profondeur;

        return $this;
    }

    /**
     * Get adresse de l'ecole
     *
     * @return  string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set adresse de l'ecole
     *
     * @param  string  $nom  Adresse de l'ecole
     *
     * @return  self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    // Pour afficher 
    public function __toString()
    {
        return self::class . "\nNom de la classe : " . $this->getNom() . "\nTaille de la sallles de classe maximum : " . $this->getQuantityMax() . "\nEspace occupé : " . $this->getQuantity() . "\nTous les meubles dans la salle : " . implode($this->getArrayContent()) . "\nlargeur : " . $this->getLargeur() . "m" . "\nhauteur : " . $this->getLargeur() . "m" . "\nProfondeur : " . $this->getProfondeur() . "m";
    }
}
