<?php


namespace App\Services\Implementation;

use App\Repositories\Implementation\OrderRepository;

class OrderService
{
    public $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getOrders($branchID)
    {
        return $this->orderRepository->getOrders($branchID);
    }

    public function storeOrder($data)
    {
        $this->orderRepository->storeOrder($data);
    }

}
