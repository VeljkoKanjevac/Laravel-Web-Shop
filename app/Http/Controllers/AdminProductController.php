<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Repositories\ProductsRepository;

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

    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create', compact('categories'));
    }

    public function allProducts()
    {
        $allProducts = Product::all();

        return view('admin.products.all', compact('allProducts'));
    }

    public function deleteProduct(Product $product)
    {
        $product->delete();

        return redirect()->back();
    }

    public function editProduct(Product $product)
    {
        $categories = Category::all();

        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function updateProduct(Product $product, AddProductRequest $request)
    {
        $this->productsRepo->update($product, $request);

        return redirect()->route('product.all');
    }
}
