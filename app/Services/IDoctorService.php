<?php

namespace App\Services;

interface IDoctorService
{
    public function getDoctors();
    public function getDoctor($id);
    public function storeDoctor($data);
    public function updateDoctor($data , $id);
}
