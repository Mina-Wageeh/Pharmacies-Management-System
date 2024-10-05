<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function branchSession()
    {
        $currentBranch = Branch::where('id' , auth()->user()->branch_id)->get();
        return view('session.index' , compact($currentBranch));
    }

}
