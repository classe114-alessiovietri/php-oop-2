<?php

class Product {

    public $name;
    public $image;
    public $price;
    public $quantity;
    public $description;
    public $category; // è un'associazione con la classe Category

    public function __construct(
        $name,
        $image = null,
        $price = null,
        $quantity = null,
        $description = null,
        $category = null,
    )
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->category = $category;
    }

}