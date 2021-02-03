<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminfichaController;

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

Route::get('company',[AdminfichaController::class,'index'])->name('.index');
Route::get('company/create',[AdminfichaController::class,'create'])->name('adminficha.create');
Route::post('company',[AdminfichaController::class,'store'])->name('adminficha.store');
Route::get('company/{id}',[AdminfichaController::class,'show'])->name('adminficha.find');
Route::get('company/edit/{id}',[AdminfichaController::class,'edit'])->name('adminficha.edit');
Route::put('company/{id}',[AdminfichaController::class,'update'])->name('adminficha.update');
Route::get('company/deactivate/{id}',[AdminfichaController::class,'deactivate'])->name('adminficha.deactivate');
