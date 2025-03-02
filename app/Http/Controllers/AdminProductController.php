<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use App\Repositories\ProductsRepository;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    private $productsRepo;

    public function __construct()
    {
        $this->productsRepo = new ProductsRepository();
    }
    public function save(AddProductRequest $request)
    {
        Product::create($request->all());

        return redirect()->back();
    }
}
