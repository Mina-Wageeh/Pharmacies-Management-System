<?php

namespace App\Services\Implementation;

use App\Repositories\Implementation\CategoryRepository;

class CategoryService
{
    public $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository =$categoryRepository;
    }

    public function getCategories()
    {
        return $this->categoryRepository->getCategories();
    }

    public function storeCategory($data)
    {
        $this->categoryRepository->storeCategory();
    }

}
