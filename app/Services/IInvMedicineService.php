<?php

namespace App\Services;

interface IInvMedicineService
{
    public function getInvMedicines();

    public function getInvMedicine($id);

    public function storeInvMedicine($data);

    public function updateMedicine($data , $id);

    public function deleteInvMedicine($id);
}
