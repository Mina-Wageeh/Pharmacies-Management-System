<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('branch')->where('branch_id' , auth()->user()->branch_id)->get();
        return view('doctor.index' , compact('doctors'));
    }
}
