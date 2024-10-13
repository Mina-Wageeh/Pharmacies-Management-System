<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\DoctorRequest;
use App\Models\Branch;
use App\Models\Doctor;
use App\Models\User;
use App\Services\implementation\BranchService;
use App\Services\implementation\DoctorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    public $doctorService;
    public $branchService;

    public function __construct(DoctorService $doctorService , BranchService $branchService)
    {
        $this->doctorService = $doctorService;
        $this->branchService = $branchService;
    }

    public function index()
    {
        $doctors = $this->doctorService->getAllDoctors();
        return view('doctor.index' , compact('doctors'));
    }

    public function create()
    {
        $branch = $this->branchService->getCurrentBranch();
        return view('doctor.create' , compact( 'branch'));
    }

    public function store(DoctorRequest $request)
    {
        $data =
        [
            'branch_id' => auth()->user()->branch_id,
            'name' => $request->doctor_name,
            'national_id' => $request->doctor_nat_id,
            'age' => $request->doctor_age,
            'phone' => $request->doctor_phone,
            'address' => $request->doctor_address,
        ];

        $this->doctorService->storeDoctor($data);

        return redirect()->route('doctor.index');
    }


    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('doctor.edit' , compact('doctor'));
    }

    public function update(Request $request , $id)
    {
        $doctor = Doctor::find($id);
        if($doctor)
        {
            $doctor->update
            ([
                'national_id' => $request -> doctor_nat_id ,
                'name' => $request -> doctor_name ,
                'age' => $request -> doctor_age ,
                'phone' => $request -> doctor_phone ,
                'address' => $request -> doctor_address ,
            ]);
            return redirect() -> route('doctor.index');
        }
    }

    public function delete(Request $request)
    {
        $doctor = Doctor::find($request -> doctor_id);

        if($doctor)
        {
            $delete = $doctor -> delete();
            if($delete)
            {
                return response() -> json(['status' => 'ok']);
            }
        }
    }

}
