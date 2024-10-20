<?php


namespace App\Services\Implementation;

use App\Repositories\Implementation\MedicineRepository;

class MedicineService
{
    private $medicineRepository;

    public function __construct(MedicineRepository $medicineRepository)
    {
        $this->medicineRepository = $medicineRepository;
    }

    public function getMedicines($branchID)
    {
        return $this->medicineRepository->getMedicines($branchID);
    }

    public function getMedicine($id)
    {
        return $this->medicineRepository->getMedicine($id);
    }

    public function getMedicinesByCategory($categoryID)
    {
        return $this->medicineRepository->getMedicinesByCategory($categoryID);
    }

    public function storeMedicine($data)
    {
        $this->medicineRepository->storeMedicine($data);
    }

    public function updateMedicine($data , $id)
    {
        $this->medicineRepository->updateMedicine($data , $id);
    }

    public function deleteMedicine($id)
    {
        $this->medicineRepository->deleteMedicine($id);
    }
}
