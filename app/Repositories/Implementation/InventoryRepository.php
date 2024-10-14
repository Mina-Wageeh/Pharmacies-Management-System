<?php


namespace App\Repositories\Implementation;


use App\Models\Inventory;

class InventoryRepository
{
    public function getCurrentInventory()
    {
        return Inventory::where('branch_id' , auth()->user()->branch_id)->first();
    }
}
