<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerShop;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/petshop',action: [ControllerShop::class, 'index'])->name(name: 'petshop.index');

Route::get('/petshop/create', [ControllerShop::class, 'create'])->name('petshop.create');

Route::post('/petshop',[ControllerShop::class, 'store'])->name('petshop.store');

Route::get('/petshop/{animal}/edit',action: [ControllerShop::class, 'edit'])->name('petshop.edit');

Route::put('/petshop/{animal}',action: [ControllerShop::class, 'update'])->name('petshop.update');

Route::get('/petshop/{animal}',[ControllerShop::class, 'show'])->name('petshop.show');

Route::delete('/petshop/{animal}',[ControllerShop::class, 'destroy'])->name('petshop.destroy');