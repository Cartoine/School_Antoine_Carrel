<?php

class ClassRooms extends InQuantity
{

    public function __construct(string $adresse, int $quantityMax, int $quantity, array $arrayContent)
    {
        parent::__construct($quantityMax, $quantity, $arrayContent);
        $this->adresse = $adresse;
    }

    public function getInQuantity()
    {
    }

    // Pour afficher 
    public function __toString()
    {
        return self::class . "\nTaille de la sallles de classe maximum : " . $this->getQuantityMax() . "\nEspace occupé : " . $this->getQuantity() . "\nTous les meubles dans la salle : " . implode($this->getArrayContent());
    }
}
