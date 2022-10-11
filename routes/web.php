<?php

use App\Http\Controllers\Personas;
use Illuminate\Support\Facades\Route;



Route::get('/',[Personas::class, 'index'])->name('personas.index');
Route::get('/agregar', [Personas::class, 'create'])->name('personas.create');
Route::post('/store', [Personas::class, 'store'])->name('personas.store');
Route::get('/edit/{id}',[Personas::class, 'edit'])->name('personas.edit');
Route::put('/update/{id}', [Personas::class, 'update'])->name('personas.update');
Route::delete('/destroy/{id}', [Personas::class, 'destroy'])->name('personas.destroy');