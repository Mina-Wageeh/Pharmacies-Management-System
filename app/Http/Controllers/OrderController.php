<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
use App\Services\Implementation\CategoryService;
use App\Services\Implementation\CustomerService;
use App\Services\Implementation\MedicineService;
use App\Services\Implementation\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OrderController extends Controller
{
    public $orderService;
    public $categoryService;
    public $medicineService;
    public $customerService;

    public function __construct(OrderService $orderService , CategoryService $categoryService, MedicineService $medicineService , CustomerService $customerService)
    {
        $this->orderService = $orderService;
        $this->categoryService = $categoryService;
        $this->medicineService = $medicineService;
        $this->customerService = $customerService;
    }

    /////////////////////
    /// MainFunctions ///
    /////////////////////

    public function index()
    {
        $orders = $this->orderService->getOrders(auth()->user()->branch_id);
        return view('order.index' , compact('orders'));
    }

    public function create()
    {
        $categories = $this->categoryService->getCategories();
        return view('order.create' , compact('categories' , ));
    }

    public function store(Request $request)
    {
        try
        {
            DB::beginTransaction();

            $customerData =
            [
                'name' => $request->customer_name,
                'phone' => $request->customer_phone,
            ];

            $customer = $this->customerService->storeCustomer($customerData);

            $orderData =
            [
                'total_price' => $request->medicine_price * $request->medicine_quantity,
                'branch_id' => auth()->user()->branch_id,
                'customer_id' => $customer->id,
                'order_date' => now(),
            ];

            $this->orderService->storeOrder($orderData);

            DB::commit();

            return redirect()->route('order.index');
        }
        catch (\Exception $e)
        {
            DB::rollBack();
        }
    }



}
