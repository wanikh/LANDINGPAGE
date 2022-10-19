<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
    //     return view('welcome');
    // });
Route::get('/', [App\Http\Controllers\contactsController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/view', [App\Http\Controllers\RequestsController::class, 'index'])->name('templates.Req');

Route::get('/request', [App\Http\Controllers\RequestsController::class, 'create'])->name('templates.l_request');

Route::post('/input', [App\Http\Controllers\RequestsController::class, 'store'])->name('welcome');

Route::get('/edit-data/{id}', [App\Http\Controllers\RequestsController::class, 'edit'])->name('edit');
Route::post('/update-data/{id}', [App\Http\Controllers\RequestsController::class, 'update'])->name('update');


Route::get('/delete-data/{id}', [App\Http\Controllers\RequestsController::class, 'delete'])->name('Req');




Route::get('/invoice',[App\Http\Controllers\invoicesController::class, 'index'])->name('invoice');
Route::post('/store', [App\Http\Controllers\invoicesController::class, 'store'])->name('home');
Route::get('/viewinvoice',[App\Http\Controllers\invoicesController::class, 'view'])->name('templates.viewinvoice');
Route::get('/print/{id}', [App\Http\Controllers\invoicesController::class, 'print'])->name('print');
Route::get('/printpdf/{id}',[App\Http\Controllers\invoicesController::class, 'printpdf'])->name('printpdf');
Route::get('/delete/{id}', [App\Http\Controllers\invoicesController::class, 'delete'])->name('viewinvoice');






