<?php

require_once __DIR__.'/Product.php';

class Toy extends Product {

    public $material;
    
    public function __construct(
        $name,
        $material,
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
        $this->material = $material;
    }

}