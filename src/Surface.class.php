<?php

// namespace App;


abstract class Surface
{
    /**
     * quantité max de salles et demeubles
     *
     * @var int
     */
    protected $quantityMax;

    /**
     * Quantité de salles dans l'école et
     * quantité de meubles dans une salles
     *
     * @var int
     */
    protected $quantity;

    /**
     * Tableau contenant les meubles de la salle
     * et  tableau contenant les salles de l’école
     *
     * @var array
     */
    protected $arrayContent;

    //Je créer mon contructeur
    public function __construct(int $quantityMax, int $quantity, array $arrayContent)
    {
        $this->quantityMax = $quantityMax;
        $this->quantity = $quantity;
        $this->arrayContent = $arrayContent;
    }

    // Getter et Setter + typage de ces dernier

    /**
     * Get quantité max de salles et demeubles
     *
     * @return  int
     */
    public function getQuantityMax(): int
    {
        return $this->quantityMax;
    }

    /**
     * Set quantité max de salles et demeubles
     *
     * @param  int  $quantityMax  quantité max de salles et demeubles
     *
     * @return  self
     */
    public function setQuantityMax(int $quantityMax): self
    {
        $this->quantityMax = $quantityMax;

        return $this;
    }

    /**
     * Get quantité de meubles dans une salles
     *
     * @return  int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Set quantité de meubles dans une salles
     *
     * @param  int  $quantity  quantité de meubles dans une salles
     *
     * @return  self
     */
    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get et tableau contenant les salles de l’école
     *
     * @return  array
     */
    public function getArrayContent(): array
    {
        return $this->arrayContent;
    }

    /**
     * Set et tableau contenant les salles de l’école
     *
     * @param  array  $arrayContent  et tableau contenant les salles de l’école
     *
     * @return  self
     */
    public function setArrayContent(array $arrayContent): self
    {
        $this->arrayContent = $arrayContent;

        return $this;
    }

    abstract function getSurfaces();
    // abstract function __toString(): string;
}
