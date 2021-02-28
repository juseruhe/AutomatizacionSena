<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminfichaController;
use App\Http\Controllers\AdminprogramController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\AprendizController;
use App\Http\Controllers\InstructorController;

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
Route::post('adminprogram',[AdminprogramController::class,'store'])->name('adminprogram.store');
Route::get('adminprogram/edit/{id}',[AdminprogramController::class,'edit'])->name('adminprogram.edit');
Route::put('adminprogram/{id}',[AdminprogramController::class,'update'])->name('adminprogram.update');

// Aprendiz
Route::get('aprendiz',[AprendizController::class,'index'])->name('aprendiz.index');
Route::get('aprendiz/create',[AprendizController::class,'create'])->name('aprendiz.create');
Route::post('aprendiz',[AprendizController::class,'store'])->name('aprendiz.store');
Route::get('aprendiz/edit/{id}',[AprendizController::class,'edit'])->name('aprendiz.edit');
Route::put('aprendiz/{id}',[AprendizController::class,'update'])->name('aprendiz.update');
Route::delete('aprendiz/{id}',[AprendizController::class,'destroy'])->name('aprendiz.destroy');

// Instructor
Route::get('instructor',[InstructorController::class,'index'])->name('instructor.index');
Route::get('instructor/create',[InstructorController::class,'create'])->name('instructor.create');
Route::post('instructor',[InstructorController::class,'store'])->name('instructor.store');
Route::get('instructor/edit/{id}',[InstructorController::class,'edit'])->name('instructor.edit');
Route::put('instructor/{id}',[InstructorController::class,'update'])->name('instructor.update');