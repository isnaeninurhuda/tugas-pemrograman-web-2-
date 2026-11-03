<?php

use App\Http\Controllers\SepatuController;
use Illuminate\Support\Facades\Route;


Route::get('/sepatu', [SepatuController::class, 'index'])->name('sepatu.index');
Route::get('/sepatu/create', [SepatuController::class, 'create'])->name('sepatu.create');
Route::post('/sepatu', [SepatuController::class, 'store'])->name('sepatu.store');
Route::get('/sepatu/{sepatu}/edit', [SepatuController::class, 'edit'])->name('sepatu.edit');
Route::put('/sepatu/{sepatu}/edit', [SepatuController::class, 'update'])->name('sepatu.update');
Route::delete('/sepatu/{sepatu}/edit', [SepatuController::class, 'destroy'])->name('sepatu.destroy');

Route::get('/', function () {
    return to_route('sepatu.index');

});
    