<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\TaskService;

class ProductController extends Controller
{
    public function __construct(
        protected TaskService $taskService
    ) {}

    public function index(ProductService $productService){
        $newProduct = [
            'id' => 4,
            'name' => 'Orange',
            'category' => 'fruit'
        ];
        $productService->insert($newProduct);
        $this->taskService->add('Add to cart');
        $this->taskService->add('Checkout');

        $data = [
            'products' => $productService->listProducts(),
            'tasks' => $this->taskService->getAllTasks()
        ];

        return view('product.index', $data);

    }

    public function show(ProductService $productService, string $id){
        $product = collect($productService->listProducts())->filter(function ($item) use ($id){
            return $item['id'] == 'id';
        })->first();

        return $product;
            
    }

}