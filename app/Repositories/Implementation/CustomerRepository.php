<?php


namespace App\Repositories\Implementation;

use App\Models\Customer;

class CustomerRepository
{

    public function getCustomer($id)
    {

    }

    public function storeCustomer($data)
    {
        return Customer::create($data);
    }
}
