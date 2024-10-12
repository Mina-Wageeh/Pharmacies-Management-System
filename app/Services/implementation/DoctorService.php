<?php


namespace App\Services\implementation;


use App\Models\Doctor;

class DoctorService
{
    public function getAllDoctors()
    {
        return Doctor::with('branch')->where('branch_id' , auth()->user()->branch_id)->get();
    }

    public function createDoctor($data)
    {
        return Doctor::create($data);
    }
}
