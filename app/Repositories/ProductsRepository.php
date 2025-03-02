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

    public function update($product, $request)
    {
        $product->update([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'stock' => $request->get('stock'),
            'image' => $request->get('image'),
            'category_id' => $request->get('category_id'),
        ]);
    }

}
