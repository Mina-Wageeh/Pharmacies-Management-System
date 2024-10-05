<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('branch')->where('branch_id' , auth()->user()->branch_id)->get();
        return view('doctor.index' , compact('doctors'));
    }

    public function create()
    {
        $branch = Branch::where('id' , auth()->user()->branch_id)->first();
        return view('doctor.create' , compact( 'branch'));
    }

    public function store(Request $request)
    {
        Doctor::create
        ([
            'branch_id' => auth()->user()->branch_id,
            'name' => $request->doctor_name,
            'national_id' => $request->doctor_nat_id,
            'age' => $request->doctor_age,
            'phone' => $request->doctor_phone,
            'address' => $request->doctor_address,
        ])->save();

        return redirect()->route('doctor.index');
    }

}
