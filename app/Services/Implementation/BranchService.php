<?php

namespace App\Services\Implementation;

use App\Repositories\Implementation\BranchRepository;

class BranchService
{
    public $branchRepository;

    public function __construct(BranchRepository $branchRepository)
    {
        $this->branchRepository = $branchRepository;
    }

    public function getBranches()
    {
        return $this->branchRepository->getBranches();
    }

    public function getBranch($id)
    {
        return $this->branchRepository->getBranch($id);
    }

    public function storeBranch($data)
    {
        $this->branchRepository->storeBranch($data);
    }
}
