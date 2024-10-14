<?php


namespace App\Repositories\Implementation;


use App\Models\InvMedicine;

class InvMedicineRepository
{
    public function getInvMedicines()
    {
        return InvMedicine::where('branch_id' , auth()->user()->branch_id)->get();
    }

    public function getInvMedicine($id)
    {
        return InvMedicine::find($id);
    }

    public function storeInvMedicine($data)
    {
        InvMedicine::create($data);
    }

    public function updateMedicine($data , $id)
    {
        $inv_medicine = $this->getInvMedicine($id);
        if($inv_medicine)
        {
            $inv_medicine->update($data);
        }
    }

    public function deleteInvMedicine($id)
    {
        $inv_medicine = $this->getInvMedicine($id);

        if($inv_medicine)
        {
            $delete = $inv_medicine -> delete();
        }
    }
}
