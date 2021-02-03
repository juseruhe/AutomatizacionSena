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

Route::get('adminficha',[AdminfichaController::class,'index'])->name('.index');
Route::get('adminficha/create',[AdminfichaController::class,'create'])->name('adminficha.create');
Route::post('adminficha',[AdminfichaController::class,'store'])->name('adminficha.store');
Route::get('adminficha/{id}',[AdminfichaController::class,'show'])->name('adminficha.find');
Route::get('adminficha/edit/{id}',[AdminfichaController::class,'edit'])->name('adminficha.edit');
Route::put('adminficha/{id}',[AdminfichaController::class,'update'])->name('adminficha.update');
Route::get('adminficha/deactivate/{id}',[AdminfichaController::class,'deactivate'])->name('adminficha.deactivate');
Route::put('adminficha/deactivated/{id}',[AdminfichaController::class,'deactivated'])->name('adminficha.deactivated');
