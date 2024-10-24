<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\InvMedicineController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'] , function()
{

    Route::get('/', [DashboardController::class, 'dashboardRedirect']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::group(['prefix'=>'branches'] , function()
    {
        Route::get('/', [BranchController::class, 'index'])->name('branch.index');
        Route::get('create', [BranchController::class, 'create'])->name('branch.create');
        Route::post('store', [BranchController::class, 'store'])->name('branch.store');
    });

    Route::group(['prefix'=>'doctors'] , function()
    {
        Route::get('/', [DoctorController::class, 'index'])->name('doctor.index');
        Route::get('create', [DoctorController::class, 'create'])->name('doctor.create');
        Route::post('store', [DoctorController::class, 'store'])->name('doctor.store');
        Route::get('edit/{id}', [DoctorController::class, 'edit'])->name('doctor.edit');
        Route::post('update/{id}', [DoctorController::class, 'update'])->name('doctor.update');
        Route::post('delete', [DoctorController::class, 'delete'])->name('doctor.delete');
    });

    Route::group(['prefix'=>'categories'] , function()
    {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('store', [CategoryController::class, 'store'])->name('category.store');
    });

    Route::group(['prefix'=>'medicines'] , function()
    {
        Route::get('/', [MedicineController::class, 'index'])->name('medicine.index');
        Route::get('create', [MedicineController::class, 'create'])->name('medicine.create');
        Route::post('store', [MedicineController::class, 'store'])->name('medicine.store');
        Route::get('edit/{id}', [MedicineController::class, 'edit'])->name('medicine.edit');
        Route::post('update/{id}', [MedicineController::class, 'update'])->name('medicine.update');
        Route::post('delete', [MedicineController::class, 'delete'])->name('medicine.delete');
    });

    Route::group(['prefix'=>'inventory'] , function()
    {
        Route::group(['prefix'=>'medicines'] , function()
        {
            Route::get('/', [InvMedicineController::class, 'index'])->name('inv_medicine.index');
            Route::get('create', [InvMedicineController::class, 'create'])->name('inv_medicine.create');
            Route::post('store', [InvMedicineController::class, 'store'])->name('inv_medicine.store');
            Route::get('edit/{id}', [InvMedicineController::class, 'edit'])->name('inv_medicine.edit');
            Route::post('update/{id}', [InvMedicineController::class, 'update'])->name('inv_medicine.update');
            Route::post('delete', [InvMedicineController::class, 'delete'])->name('inv_medicine.delete');
        });

    });

    Route::group(['prefix'=>'orders'] , function()
    {
        Route::get('/', [OrderController::class, 'index'])->name('order.index');
        Route::get('create', [OrderController::class, 'create'])->name('order.create');
        Route::post('store', [OrderController::class, 'store'])->name('order.store');
        Route::get('edit/{id}', [OrderController::class, 'edit'])->name('order.edit');
        Route::post('update/{id}', [OrderController::class, 'update'])->name('order.update');
        Route::post('delete', [OrderController::class, 'delete'])->name('order.delete');

        Route::get('get-med-by-cat/{id}', [MedicineController::class, 'getMedicinesByCategory'])->name('medicine.category');
        Route::get('get-med-by-id/{id}', [MedicineController::class, 'getMedicineByID'])->name('medicine.id');
    });


    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('register', [RegisterController::class, 'register'])->name('register');




