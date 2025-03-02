<?php

namespace App\Repositories;

use App\Models\Product;

class ProductsRepository
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new Product();
    }

}
