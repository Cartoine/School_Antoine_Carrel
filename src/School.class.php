<?php

class School extends InQuantity
{
    /**
     * Adresse de l'ecole
     *
     * @var string
     */
    protected $adresse;

    public function __construct(string $adresse, int $quantityMax, int $quantity, array $arrayContent)
    {
        parent::__construct($quantityMax, $quantity, $arrayContent);
        $this->adresse = $adresse;
    }

    public function getInQuantity()
    {
    }

    // Getter et Setter de l'adresse de l'ecole + typage
    /**
     * Get adresse de l'ecole
     *
     * @return  string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * Set adresse de l'ecole
     *
     * @param  string  $adresse  Adresse de l'ecole
     *
     * @return  self
     */
    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }


    // Pour afficher 
    public function __toString()
    {
        return self::class . " Adresse : " . $this->getAdresse() . "\nNombre de sallles de classe maximum : " . $this->getQuantityMax() . "\nNombre de sallles : " . $this->getQuantity() . "\nToutes les salles de l'ecole : " . implode($this->getArrayContent());
    }
}
