<?php


namespace App\Repositories\Implementation;

use App\Models\Branch;

class BranchRepository
{
    public function getBranches()
    {
        return Branch::get();
    }

    public function getBranch($id)
    {
        return  Branch::find($id);
    }

    public function storeBranch($data)
    {
        Branch::create($data);
    }
}
