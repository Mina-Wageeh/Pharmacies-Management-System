<?php

namespace App\Traits;

use App\Models\InvMedicine;

trait Helper
{

    public static function getSpecificInvMedicineQuantity($medicineCode)
    {
        $invMedicine = InvMedicine::where('code' , $medicineCode)->first();
        if($invMedicine)
        {
            return $invMedicine['quantity'];
        }
        else
        {
            return 0;
        }
    }

}
