<?php


namespace App\Services;


interface ICategoryService
{
    public function getCategories();

    public function storeCategory($data);
}
