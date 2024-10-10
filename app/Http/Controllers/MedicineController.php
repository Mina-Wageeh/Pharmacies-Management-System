<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\InvMedicine;
use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        $inv_medicines = InvMedicine::getInvMedicine();
        $medicines = Medicine::with('category')->where('branch_id' , auth()->user()->branch_id)->get();
        return view('medicine.index' , compact(['medicines' , 'inv_medicines']));
    }

    public function create()
    {
        $categories = Category::get();
        return view('medicine.create' , compact('categories'));
    }

    public function store(Request $request)
    {
        Medicine::create
        ([
            'name' => $request->medicine_name,
            'code' => $request->medicine_code,
            'price' => $request->medicine_price,
            'quantity' => $request->medicine_quantity,
            'category_id' => $request->category_id,
            'branch_id' => auth()->user()->branch_id,
        ])->save();

        return redirect()->route('medicine.index');
    }

    public function edit($id)
    {
        $medicine = Medicine::find($id);
        return view('medicine.edit' , compact('medicine'));
    }

    public function update(Request $request , $id)
    {
        $medicine = Medicine::find($id);
        if($medicine)
        {
            $medicine->update
            ([
                'name' => $request -> medicine_name ,
                'price' => $request -> medicine_price ,
                'quantity' => $request -> medicine_quantity ,
            ]);
            return redirect() -> route('medicine.index');
        }
    }

    public function delete(Request $request)
    {
        $medicine = Medicine::find($request -> medicine_id);

        if($medicine)
        {
            $delete = $medicine -> delete();
            if($delete)
            {
                return response() -> json(['status' => 'ok']);
            }
        }
    }
}
