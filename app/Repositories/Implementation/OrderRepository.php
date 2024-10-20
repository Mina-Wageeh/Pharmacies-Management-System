<?php


namespace App\Repositories\Implementation;

use App\Models\Order;
use App\Services\Implementation\OrderService;

class OrderRepository
{

    public function getOrders($branchID)
    {
        return Order::with(['customer:id,name,phone'])->where('branch_id' , $branchID)->get();
    }

    public function storeOrder($data)
    {
        Order::create($data);
    }


}
