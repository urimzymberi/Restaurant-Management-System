<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Management\TableController;
use App\Http\Controllers\Management\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/test', function (){
//    return view('index');
//});


Route::get('/', [PageController::class, 'index']);



Route::get('about',[PageController::class,'about']);
Route::get('contact',[PageController::class,'contact']);
Route::get('menu',[PageController::class,'menu']);
Route::get('login-register', [PageController::class, 'loginRegister'])->name('login_register');

Route::middleware('is_client')->group(function () {
    Route::get('reservation', [PageController::class, 'reservation'])->name('reservation');
    Route::post('reservation-store', [ReservationController::class, 'store'])->name('reservation_store');
});

Route::group(['middleware' => ['role:Waiter']], function () {
    Route::get('tables', [TableController::class, 'index'])->name('tables');
    Route::post('table_details', [TableController::class, 'tableDetails'])->name('table_details');
    Route::post('add_item', [TableController::class, 'addItem'])->name('add_item');
    Route::post('item_quantity', [TableController::class, 'itemQuantity'])->name('item_quantity');
    Route::post('item_remove', [TableController::class, 'itemRemove'])->name('item_remove');
    Route::post('item_orders', [TableController::class, 'itemOrders'])->name('item_orders');
    Route::post('bill_save', [TableController::class, 'billSave'])->name('bill_save');
    Route::post('order/delete', [TableController::class, 'deleteOrder'])->name('delete.order');
});

//Route::middleware('is_waiter')->group(function (){
//    Route::get('tables', [TableController::class, 'index'])->name('tables');
//    Route::post('table_details', [TableController::class, 'tableDetails'])->name('table_details');
//    Route::post('add_item', [TableController::class, 'addItem'])->name('add_item');
//    Route::post('item_quantity', [TableController::class, 'itemQuantity'])->name('item_quantity');
//    Route::post('item_remove', [TableController::class, 'itemRemove'])->name('item_remove');
//    Route::post('item_orders', [TableController::class, 'itemOrders'])->name('item_orders');
//    Route::post('bill_save', [TableController::class, 'billSave'])->name('bill_save');
//    Route::post('order/delete', [TableController::class, 'deleteOrder'])->name('delete.order');
//});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route::resource('table', TableController::class);
Route::resource('user', UserController::class);
Route::resource('prepare', \App\Http\Controllers\Management\OrderPrepareController::class);
Route::resource('item', \App\Http\Controllers\Management\ItemController::class);
Route::get('/report',[\App\Http\Controllers\Management\ReportController::class,'index'])->name('report');
Route::get('a/reservation',[\App\Http\Controllers\Management\ReservationController::class,'index'])->name('reservation.index');
Route::patch('/reservation/{reservation}',[\App\Http\Controllers\Management\ReservationController::class,'update'])->name('reservation.update');

