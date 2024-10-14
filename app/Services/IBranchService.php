<?php

namespace App\Services;

interface IBranchService
{
    public function getBranches();

    public function getBranch($id);

    public function storeBranch($data);
}
