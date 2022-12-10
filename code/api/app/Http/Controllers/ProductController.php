<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Contracts\Services\Data\IProductService;

class ProductController extends Controller
{
    private IProductService $productService;

    public function __construct(IProductService $productService)
    {
        $this->productService = $productService;
    }

    public function all(Request $request)
    {
        return $this->productService->all();
    }

    public function get(Request $request, int $id)
    {
        return response()->json($this->productService->get($id), 200);
    }

    public function posts(Request $request)
    {
        $posts = DB::select('select * from wp_posts');

        return response()->json($posts, 200);
    }

    public function getBy(Request $request, string $column, string $value)
    {
        return response()->json($this->productService->by($column, $value), 200);
    }
}
