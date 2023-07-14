<?php

use App\Http\Controllers\deleteController;
use App\Http\Controllers\getProductController;
use App\Http\Controllers\productFiterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stroreProductController;
use App\Models\Product;
use App\Models\User;

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

Route::get('/AddProduct',[stroreProductController::class,'create']);

Route::post('/pos', [stroreProductController::class, 'storeProduct']);
Route::get('/products/{product}',[getProductController::class,'producte']);
Route::get('/updateProduct/{id}',[getProductController::class,'update']);


Route::get('/deleteProduct/{id}', [deleteController::class,'delete']);

Route::get('/dashboard', function () {

    $product= new Product();

    return view('dashboard',compact('product'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
