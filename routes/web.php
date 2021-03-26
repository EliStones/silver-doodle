<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/invoices', function () {
    return view('invoices.invoices');
})->middleware(['auth'])->name('dashboard');

Route::get('/addInvoices', function () {
    return view('invoices.create');
})->middleware(['auth']);

Route::post('/addInvoice', [InvoiceController::class, 'create'])->middleware(['auth']);

Route::get('/purchaseorders', function () {
    return view('purchaseOrder');
})->middleware(['auth'])->name('dashboard');

Route::get('/users', function () {
    return view('users');
})->middleware(['auth'])->name('dashboard');