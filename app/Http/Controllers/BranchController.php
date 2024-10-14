<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Services\Implementation\BranchService;
use App\Services\interface\IBranchService;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    //Properties
    public $branchService;

    //Constructor Injected With Service
    public function __construct(BranchService $branchService)
    {
        $this->branchService = $branchService;
    }

    public function index()
    {
        $branches = $this->branchService->getBranches();
        return view('branch.index' , compact('branches'));
    }

    public function create()
    {
        return view('branch.create');
    }

    public function store(Request $request)
    {
        $data =
        [
          'name' => $request->branch_name,
          'phone' => $request->branch_phone,
          'address' => $request->branch_address,
        ];

        $this->branchService->storeBranch($data);

        return redirect()->route('branch.index');
    }

}
