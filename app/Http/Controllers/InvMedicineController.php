<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvMedicineRequest;
use App\Models\Inventory;
use App\Models\InvMedicine;
use Illuminate\Http\Request;

class InvMedicineController extends Controller
{
    public function index()
    {
        $inv_medicines = InvMedicine::where('branch_id' , auth()->user()->branch_id)->get();
        return view('inv_medicine.index' , compact('inv_medicines'));
    }

    public function create()
    {
        $inventory = Inventory::where('branch_id' , auth()->user()->branch_id)->first();
//        return $inventory;
        return view('inv_medicine.create' , compact('inventory'));
    }

    public function store(InvMedicineRequest $request)
    {
        $inventory_data = json_decode($request-> inventory_data);

        InvMedicine::create
        ([

            'name' => $request->inv_medicine_name,
            'code' => $request->inv_medicine_code,
            'price' => $request->inv_medicine_price,
            'quantity' => $request->inv_medicine_quantity,
            'inventory_id' => $inventory_data->id,
            'branch_id' => auth()->user()->branch_id,
        ])->save();

        return redirect()->route('inv_medicine.index');
    }

    public function edit($id)
    {
        $inv_medicine = InvMedicine::find($id);
        return view('inv_medicine.edit' , compact('inv_medicine'));
    }

    public function update(Request $request , $id)
    {
        $inv_medicine = InvMedicine::find($id);
        if($inv_medicine)
        {
            $inv_medicine->update
            ([
                'name' => $request -> inv_medicine_name ,
                'price' => $request -> inv_medicine_price ,
                'quantity' => $request -> inv_medicine_quantity ,
            ]);
            return redirect() -> route('inv_medicine.index');
        }
    }
//
    public function delete(Request $request)
    {
        $inv_medicine = InvMedicine::find($request -> inv_medicine_id);

        if($inv_medicine)
        {
            $delete = $inv_medicine -> delete();
            if($delete)
            {
                return response() -> json(['status' => 'ok']);
            }
        }
    }




    //Test
    public function getMedQ()
    {
        $inv_medicines = InvMedicine::where('branch_id' , auth()->user()->branch_id)->get();
        return view('inv_medicine.index' , compact('inv_medicines'));
    }
}
