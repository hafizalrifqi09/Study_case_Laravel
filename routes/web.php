<?php

use App\http\Controllers\MedicineController;
use App\http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

route::prefix('/medicine')->name('medicine.')->group(function(){
    route::get('/create', [MedicineController::class, 'create'])->name('create');
    route::post('/store', [MedicineController::class, 'store'])->name('store');
    route::get('/', [MedicineController::class, 'index'])->name('home');
    route::get('/{id}', [MedicineController::class, 'edit'])->name('edit');
    route::patch('/{id}', [MedicineController::class, 'update'])->name('update');
    route::delete('/{id}', [MedicineController::class, 'destroy'])->name('delete');
    route::get('/data/stock', [MedicineController::class, 'stock'])->name('stock');
    route::get('/data/stock/{id}', [MedicineController::class, 'stockEdit'])->name('stock.edit');
    route::patch('/data/stock/{id}', [MedicineController::class, 'stockUpdate'])->name('stock.update');



    
});
route::prefix('/user')->name('user.')->group(function(){
    route::get('/create', [UserController::class, 'create'])->name('create');
    route::post('/store', [UserController::class, 'store'])->name('store');
    route::get('/', [UserController::class, 'index'])->name('home');
    route::get('/{id}', [UserController::class, 'edit'])->name('edit');
    route::patch('/{id}', [UserController::class, 'update'])->name('update');
    route::delete('/{id}', [UserController::class, 'destroy'])->name('delete');
});
