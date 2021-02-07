<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminfichaController;
use App\Http\Controllers\AdminprogramController;

Route::get('/', function () {
    return view('welcome');
});
// rutas adminficha
Route::get('adminficha',[AdminfichaController::class,'index'])->name('adminficha.index');
Route::get('adminficha/create',[AdminfichaController::class,'create'])->name('adminficha.create');
Route::post('adminficha',[AdminfichaController::class,'store'])->name('adminficha.store');
Route::get('adminficha/{id}',[AdminfichaController::class,'show'])->name('adminficha.find');
Route::get('adminficha/edit/{id}',[AdminfichaController::class,'edit'])->name('adminficha.edit');
Route::put('adminficha/{id}',[AdminfichaController::class,'update'])->name('adminficha.update');
Route::get('adminficha/deactivate/{id}',[AdminfichaController::class,'deactivate'])->name('adminficha.deactivate');
Route::put('adminficha/deactivated/{id}',[AdminfichaController::class,'deactivated'])->name('adminficha.deactivated');
Route::get('adminficha/journey',[AdminfichaController::class,'show'])->name('adminficha.journey');
Route::get('adminficha/filtro/programa',[AdminfichaController::class,'program'])->name('adminficha.program');
Route::get('adminficha/filtro/activado',[AdminfichaController::class,'activado'])->name('adminficha.activado');

// ruta adminprograma
Route::get('adminprogram',[AdminprogramController::class,'index'])->name('adminprogram.index');
Route::get('adminprogram/create',[AdminprogramController::class,'create'])->name('adminprogram.create');
Route::get('adminprogram',[AdminprogramController::class,'store'])->name('adminprogram.store');
