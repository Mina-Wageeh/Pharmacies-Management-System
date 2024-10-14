<?php


namespace App\Repositories\Implementation;


use App\Models\Category;

class CategoryRepository
{
    public function getCategories()
    {
        return Category::get();
    }

    public function storeCategory($data)
    {
        Category::create($data);
    }

}
