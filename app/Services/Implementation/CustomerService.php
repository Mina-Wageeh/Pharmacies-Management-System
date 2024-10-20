<?php


namespace App\Services\Implementation;


use App\Repositories\Implementation\CustomerRepository;

class CustomerService
{
    public $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function storeCustomer($data)
    {
       return $this->customerRepository->storeCustomer($data);
    }
}
