<?php


namespace App\Repositories\Implementation;


use App\Models\Doctor;

class DoctorRepository
{
    public function getDoctors()
    {
        return Doctor::where('branch_id' , auth()->user()->branch_id)->get();
    }

    public function getDoctor($id)
    {
        return Doctor::find($id);
    }

    public function storeDoctor($data)
    {
        return Doctor::create($data);
    }

    public function updateDoctor($data , $id)
    {
        $doctor = $this->getDoctor($id);
        if($doctor)
        {
            $doctor->update($data);
        }
    }
}
