<?php


namespace App\Repositories\Implementation;

use App\Models\Medicine;

class MedicineRepository
{
    public function getMedicines($branchID)
    {
        return Medicine::with('category')->where('branch_id' , $branchID)->get();
    }

    public function getMedicine($id)
    {
        return Medicine::find($id);
    }

    public function storeMedicine($data)
    {
        Medicine::create($data);
    }

    public function updateMedicine($data , $id)
    {
        $medicine = $this->getMedicine($id);
        if($medicine)
        {
            $medicine->update($data);
        }
    }

    public function deleteMedicine($id)
    {
        $medicine = $this->getMedicine($id);

        if($medicine)
        {
            $delete = $medicine -> delete();
        }
    }
}
