<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminfichaController;
use App\Http\Controllers\AdminprogramController;
use App\Http\Controllers\FichaController;

Route::get('/home', function () {return view('welcome');})->name('welcome');

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
Route::get('adminficha/jornadas',[AdminfichaController::class,'jornadas'])->name('adminficha.jornadas');
Route::get('adminficha/filtro/programas',[AdminfichaController::class,'programas'])->name('adminficha.programas');
Route::get('adminficha/filtro/activados',[AdminfichaController::class,'activado'])->name('adminficha.activados');

// Mostrar Filtros
Route::get('ficha/jornada',[FichaController::class,'jornada'])->name('ficha.jornada');
Route::get('fichas/programs',[FichaController::class,'programs'])->name('ficha.programs');
Route::get('fichas/activados',[FichaController::class,'activados'])->name('ficha.activados');



// ruta adminprograma
Route::get('adminprogram',[AdminprogramController::class,'index'])->name('adminprogram.index');
Route::get('adminprogram/create',[AdminprogramController::class,'create'])->name('adminprogram.create');
//Route::get('adminprogram',[AdminprogramController::class,'store'])->name('adminprogram.store');
