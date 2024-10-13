<?php


namespace App\Services\implementation;


use App\Models\Doctor;

class DoctorService
{
    public function getAllDoctors()
    {
        return Doctor::with('branch')->where('branch_id' , auth()->user()->branch_id)->get();
    }

    public function getDoctor($id)
    {
        return Doctor::find($id);
    }


    public function storeDoctor($data)
    {
        return Doctor::create($data);
    }

    public function deleteDoctor($id)
    {
        $doctor = $this->getDoctor($id);
        if($doctor)
        {
            $doctor -> delete();
        }
    }


}
