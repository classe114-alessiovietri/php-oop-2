<?php

require_once __DIR__.'/Product.php';

class PetBed extends Product {

    public $width;
    public $height;
    
    public function __construct(
        $name,
        $width,
        $height,
        $image = null,
        $price = null,
        $quantity = null,
        $description = null,
        $category = null,
    )
    {
        parent::__construct(
            $name,
            $image,
            $price,
            $quantity,
            $description,
            $category
        );
        $this->width = $width;
        $this->height = $height;
    }
    
}