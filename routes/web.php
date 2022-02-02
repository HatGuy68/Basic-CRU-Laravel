<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuppliersController;

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

Route::get('/', [SuppliersController::class, 'showAllSuppliers']);

Route::get('/form', [SuppliersController::class, 'showForm']);

Route::get('/supplier/{supplierID}', [SuppliersController::class, 'showSupplierDetails']);
Route::get('/supplier/{supplierID}/edit', [SuppliersController::class, 'showEditForm']);

Route::post('/addSupplierRoute', [SuppliersController::class, 'addSupplier'])->name('addSupplier');
Route::post('/editSupplierRoute', [SuppliersController::class, 'editSupplier'])->name('editSupplier');