<?php

namespace App\Http\Controllers;

use App\DataTables\PharmaciesDataTable;
use App\Models\Branch;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BranchController extends Controller
{
    public function index()
    {
        $branches = Branch::get();
        return view('branch.index' , compact('branches'));
    }

    public function create()
    {
        return view('branch.create');
    }

    public function store(Request $request)
    {


        Branch::create
        ([
          'name' => $request->branch_name,
          'phone' => $request->branch_phone,
          'address' => $request->branch_address,
        ])->save();

        return redirect()->route('branch.index')->with('success', 'Pharmacy has been Created Successfully!')->with('timeout', 5000);
    }

}
