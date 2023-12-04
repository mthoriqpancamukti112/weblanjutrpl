<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChashierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Models\Category;
use App\Models\Chashier;
use Illuminate\Support\Facades\Route;

Route::get('/category', [CategoryController::class, 'index'])->name('category-index');
Route::get('/category/create', [CategoryController::class, 'tambah'])->name('category-create');
Route::post('/category/store', [CategoryController::class, 'simpan'])->name('category-store');
Route::delete('category/{id}/delete', [CategoryController::class, 'delete'])->name('category-delete');
Route::get('category/{id}/edit', [CategoryController::class, 'edit'])->name('category-edit');
Route::patch('category/{id}/update', [CategoryController::class, 'update'])->name('category-update');

Route::get('/chashier', [ChashierController::class, 'index'])->name('chashier-index');
Route::get('/chashier/create', [ChashierController::class, 'tambah'])->name('chashier-create');
Route::post('/chashier/store', [ChashierController::class, 'simpan'])->name('chashier-store');
Route::delete('chashier/{id}/delete', [ChashierController::class, 'delete'])->name('chashier-delete');
Route::get('chashier/{id}/edit', [ChashierController::class, 'edit'])->name('chashier-edit');
Route::patch('chashier/{id}/update', [ChashierController::class, 'update'])->name('chashier-update');

Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier-index');
Route::get('/supplier/create', [SupplierController::class, 'tambah'])->name('supplier-create');
Route::post('/supplier/store', [SupplierController::class, 'simpan'])->name('supplier-store');
Route::delete('supplier/{id}/delete', [SupplierController::class, 'delete'])->name('supplier-delete');
Route::get('supplier/{id}/edit', [SupplierController::class, 'edit'])->name('supplier-edit');
Route::patch('supplier/{id}/update', [SupplierController::class, 'update'])->name('supplier-update');

Route::resource('/product', ProductController::class);

// Keterangan route
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route Utama
Route::get('/mahasiswa', function () {

    $array_nama = ["Haikal", "Ghozi", "Nisa"];

    return view('universitas.mahasiswa')->with('mhs', $array_nama);
});
