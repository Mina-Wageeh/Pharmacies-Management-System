<?php


namespace App\Services\Implementation;

use App\Repositories\Implementation\InvMedicineRepository;

class InvMedicineService
{

    public $invMedicineRepository;

    public function __construct(InvMedicineRepository $invMedicineRepository)
    {
        $this->invMedicineRepository = $invMedicineRepository;
    }

    public function getInvMedicines()
    {
       return $this->invMedicineRepository->getInvMedicines();
    }

    public function getInvMedicine($id)
    {
        return $this->invMedicineRepository->getInvMedicine($id);
    }

    public function storeInvMedicine($data)
    {
        $this->invMedicineRepository->storeInvMedicine($data);
    }

    public function updateMedicine($data , $id)
    {
        $this->invMedicineRepository->updateMedicine($data , $id);
    }

    public function deleteInvMedicine($id)
    {
        $this->invMedicineRepository->deleteInvMedicine($id);
    }
}
