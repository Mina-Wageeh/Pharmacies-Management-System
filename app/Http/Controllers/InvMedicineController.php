<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvMedicineRequest;
use App\Models\Inventory;
use App\Models\InvMedicine;
use App\Services\Implementation\InventoryService;
use App\Services\Implementation\InvMedicineService;
use Illuminate\Http\Request;

class InvMedicineController extends Controller
{
    public $invMedicineService;
    public $inventoryService;

    public function __construct(InvMedicineService $invMedicineService , InventoryService $inventoryService)
    {
        $this->invMedicineService = $invMedicineService;
        $this->inventoryService = $inventoryService;
    }

    public function index()
    {
        $inv_medicines = $this->invMedicineService->getInvMedicines();
        return view('inv_medicine.index' , compact('inv_medicines'));
    }

    public function create()
    {
        $inventory = $this->inventoryService->getCurrentInventory();
        return view('inv_medicine.create' , compact('inventory'));
    }

    public function store(Request $request)
    {
        $inventory = $this->inventoryService->getCurrentInventory();;

        $data =
        [
            'name' => $request->inv_medicine_name,
            'code' => $request->inv_medicine_code,
            'price' => $request->inv_medicine_price,
            'quantity' => $request->inv_medicine_quantity,
            'inventory_id' => $inventory->id,
            'branch_id' => auth()->user()->branch_id,
        ];

        $this->invMedicineService->storeInvMedicine($data);

        return redirect()->route('inv_medicine.index');
    }

    public function edit($id)
    {
        $inv_medicine = $this->invMedicineService->getInvMedicine($id);
        return view('inv_medicine.edit' , compact('inv_medicine'));
    }

    public function update(Request $request , $id)
    {
        $data =
        [
            'name' => $request -> inv_medicine_name ,
            'price' => $request -> inv_medicine_price ,
            'quantity' => $request -> inv_medicine_quantity ,
        ];

        $this->invMedicineService->updateMedicine($data , $id);

        return redirect() -> route('inv_medicine.index');
    }

    public function delete(Request $request)
    {
        $this->invMedicineService->deleteInvMedicine($request->inv_medicine_id);
    }




    //Test
    public function getMedQ()
    {
        $inv_medicines = InvMedicine::where('branch_id' , auth()->user()->branch_id)->get();
        return view('inv_medicine.index' , compact('inv_medicines'));
    }
}
