<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\Implementation\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getCategories();
        return view('category.index' , compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(CategoryRequest $request)
    {
        $data =
        [
            'name' => $request->category_name,
        ];

        $this->categoryService->storeCategory($data);

        return redirect()->route('category.index');
    }
}
