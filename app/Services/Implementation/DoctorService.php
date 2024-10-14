<?php


namespace App\Services\Implementation;

use App\Repositories\Implementation\DoctorRepository;

class DoctorService
{
    public $doctorRepository;

    public function __construct(DoctorRepository $doctorRepository)
    {
        $this->doctorRepository = $doctorRepository;
    }

    public function getDoctors()
    {
        return $this->doctorRepository->getDoctors();
    }

    public function getDoctor($id)
    {
        return $this->doctorRepository->getDoctor($id);
    }


    public function storeDoctor($data)
    {
        $this->doctorRepository->storeDoctor($data);
    }

    public function updateDoctor($data , $id)
    {
        $this->doctorRepository->updateDoctor($data , $id);
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
