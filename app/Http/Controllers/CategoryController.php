<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\implementation\CategoryService;
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
        $categories = $this->categoryService->getAllCategories();
        return view('category.index' , compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $data =
        [
            'name' => $request->category_name,
        ];

        $this->categoryService->createCategory($data);

        return redirect()->route('category.index');
    }
}
