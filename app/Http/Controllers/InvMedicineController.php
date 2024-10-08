<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
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
//
//    public function edit($id)
//    {
//        $medicine = Medicine::find($id);
//        return view('medicine.edit' , compact('medicine'));
//    }
//
//    public function update(Request $request , $id)
//    {
//        $medicine = Medicine::find($id);
//        if($medicine)
//        {
//            $medicine->update
//            ([
//                'name' => $request -> medicine_name ,
//                'price' => $request -> medicine_price ,
//                'quantity' => $request -> medicine_quantity ,
//            ]);
//            return redirect() -> route('medicine.index');
//        }
//    }
//
//    public function delete(Request $request)
//    {
//        $medicine = Medicine::find($request -> medicine_id);
//
//        if($medicine)
//        {
//            $delete = $medicine -> delete();
//            if($delete)
//            {
//                return response() -> json(['status' => 'ok']);
//            }
//        }
//    }
}
