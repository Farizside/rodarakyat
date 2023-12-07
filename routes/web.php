<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\TransactionsController;
  
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
    return view('dashboard1');
})->name('/');
  
Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/home/rent/{id}', [TransactionsController::class, 'store'])->name('home.post');
    Route::get('/home/rent/{id}', [TransactionsController::class, 'create'])->name('home.rent');
    Route::post('/home/rent/detail/{id}', [TransactionsController::class, 'detail'])->name('home.rentDetail.post');
    Route::get('/home/rent/detail', [TransactionsController::class, 'detail'])->name('home.rentDetail');

    Route::get('cart', [HomeController::class, 'cart'])->name('cart');

    Route::get('finished', [HomeController::class, 'finished'])->name('finished');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::get('/admin/customers', [CustomersController::class, 'index'])->name('customers');

    Route::get('/admin/cars', [CarsController::class, 'index'])->name('cars');
    Route::post('/admin/cars', [CarsController::class, 'store'])->name('cars');
    Route::get('/admin/cars/create', [CarsController::class, 'create'])->name('cars.create');
    Route::get('/admin/cars/{id}/edit', [CarsController::class, 'edit'])->name('cars.edit');
    Route::put('/admin/cars/{id}', [CarsController::class, 'update'])->name('cars.update');
    Route::delete('/admin/cars/{id}', [CarsController::class, 'destroy'])->name('cars.destroy');
    
    Route::get('/admin/transactions', [TransactionsController::class, 'index'])->name('transactions');
    Route::put('/admin/home/{id}', [TransactionsController::class, 'update'])->name('transactions.update');
});