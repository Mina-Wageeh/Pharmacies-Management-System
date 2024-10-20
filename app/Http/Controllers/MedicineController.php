<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicineRequest;
use App\Models\Category;
use App\Models\InvMedicine;
use App\Models\Medicine;
use App\Services\Implementation\CategoryService;
use App\Services\Implementation\MedicineService;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public $medicineService;
    public $categoryService;

    public function __construct(MedicineService $medicineService , CategoryService $categoryService)
    {
        $this->medicineService = $medicineService;
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $medicines = $this->medicineService->getMedicines(auth()->user()->branch_id);
        return view('medicine.index' , compact(['medicines']));
    }

    public function create()
    {
        $categories = $this->categoryService->getCategories();
        return view('medicine.create' , compact('categories'));
    }

    public function store(MedicineRequest $request)
    {
        $data =
        [
            'name' => $request->medicine_name,
            'code' => $request->medicine_code,
            'price' => $request->medicine_price,
            'quantity' => $request->medicine_quantity,
            'category_id' => $request->category_id,
            'branch_id' => auth()->user()->branch_id,
        ];

        $this->medicineService->storeMedicine($data);

        return redirect()->route('medicine.index');
    }

    public function edit($id)
    {
        $medicine = $this->medicineService->getMedicine($id);
        return view('medicine.edit' , compact('medicine'));
    }

    public function update(Request $request , $id)
    {

        $data =
        [
            'name' => $request -> medicine_name ,
            'price' => $request -> medicine_price ,
            'quantity' => $request -> medicine_quantity ,
        ];

        $this->medicineService->updateMedicine($data , $id);
        return redirect() -> route('medicine.index');

    }

    public function delete(Request $request)
    {
        $this->medicineService->deleteMedicine($request -> medicine_id);
    }

    // Helper Functions //
    public function getMedicinesByCategory($categoryID)
    {
        $medicines_by_category = $this->medicineService->getMedicinesByCategory($categoryID);;
        return response()->json($medicines_by_category);
    }

    public function getMedicineByID($id)
    {
        $medicine = $this->medicineService->getMedicine($id);;
        return response()->json($medicine);
    }


}
