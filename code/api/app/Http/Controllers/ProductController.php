<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contracts\Repositories\IProductRepository;

class ProductController extends Controller
{
    private IProductRepository $productRepository;

    public function __construct(IProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function all(Request $request)
    {
        return $this->productRepository->all();
    }

    public function get(Request $request, int $id)
    {
        return response()->json(['product' => $this->productRepository->get($id)]);
    }

    public function getBy(Request $request, string $column, string $value)
    {
        return response()->json(['products' => $this->productRepository->by($column, $value)]);
    }
}
