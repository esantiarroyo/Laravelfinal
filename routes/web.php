<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InsController;
use App\Http\Controllers\CelController;
use App\Http\Controllers\PresController;
use App\Http\Controllers\PrestamoController;
use Illuminate\Support\Facades\Route;

Route::view('/','welcome')->name('home');

Route::resource('blog', AdminController::class,[
    'names' => 'admins',
    'parameters' => ['blog' => 'admins']
]);

Route::resource('contact', CelController::class,[
    'names' => 'cels',
    'parameters' => ['contact' => 'cels']
]);

Route::resource('about', InsController::class,[
    'names' => 'inss',
    'parameters' => ['about' => 'inss']
]);

Route::resource('prestamo', PresController::class,[
    'names' => 'press',
    'parameters' => ['prestamo' => 'press']
]);

Route::get('/Presblog', [PrestamoController::class, 'indexCel'])->name('press.indexCel');
Route::get('/Presblog/{press}/editCel', [PrestamoController::class, 'editCel'])->name('press.editCel');
Route::patch('/Presblog/{press}', [PrestamoController::class, 'updateCel'])->name('press.updateCel');
