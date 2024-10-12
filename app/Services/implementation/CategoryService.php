<?php


namespace App\Services\implementation;


use App\Models\Category;

class CategoryService
{
    public function getAllCategories()
    {
        return Category::get();
    }

    public function createCategory($data)
    {
        return Category::create($data);
    }

}
