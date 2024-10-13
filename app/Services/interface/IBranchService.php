<?php

namespace App\Services\interface;

interface IBranchService
{
    public function getBranches();

    public function getCurrentBranch();

    public function createBranch($data);
}
