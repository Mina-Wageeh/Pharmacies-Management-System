<?php


namespace App\Services\Implementation;

use App\Repositories\Implementation\InventoryRepository;

class InventoryService
{
    public $inventoryRepository;

    public function __construct(InventoryRepository $inventoryRepository)
    {
        $this->inventoryRepository =$inventoryRepository;
    }

    public function getCurrentInventory()
    {
        return $this->inventoryRepository->getCurrentInventory();
    }
}
