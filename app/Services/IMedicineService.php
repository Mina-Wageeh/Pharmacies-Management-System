<?php

namespace App\Services;

interface IMedicineService
{
    public function getMedicines($branchID);

    public function getMedicine($id);

    public function storeMedicine($data);

    public function updateMedicine($data , $id);

    public function deleteMedicine($id);
}
