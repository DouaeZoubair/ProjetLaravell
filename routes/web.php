<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\Product_adminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ExcelController;
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

Route::get('/', [PagesController::class,'index']);
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashbord', [\App\Http\Controllers\DashbordController::class, 'index']);

Route::resource('product',ProductController::class);
Route::post('/product/ret/{product}', [ProductController::class, 'ret'])->name('product.ret');


Route::resource('gestion_product',Product_adminController::class);

Route::resource('gestion_user',UserController::class);

Route::resource('gestion_order', OrderController::class)->parameters([
    'gestion_order' => 'order'
]);


Route::get('generate-pdf', [App\Http\Controllers\PdfController::class , 'generatePdf']);




Route::post('/carta/add', [CartController::class,'addProduct'])->name('carta.add');

Route::get('/carta',[CartController::class,'index']);


Route::get('/', function () {return view('index');})->name('index');


Route::delete('/carta/remove/{id}',[CartController::class,'removeProduct'])->name('carta.remove');


Route::get('/export', [ExcelController::class, 'export'])->name('gestion_product.export');
Route::post('/import', [ExcelController::class, 'import'])->name('gestion_product.import');



