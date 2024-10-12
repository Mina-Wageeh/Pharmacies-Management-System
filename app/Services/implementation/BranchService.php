<?php

namespace App\Services\implementation;

use App\Models\Branch;

class BranchService
{
    public function getBranches()
    {
        return Branch::get();
    }

    public function getCurrentBranch()
    {
        return  Branch::where('id' , auth()->user()->branch_id)->first();
    }



    public function createBranch($data)
    {
        return Branch::create($data);
    }
}
