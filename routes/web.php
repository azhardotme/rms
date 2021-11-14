<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\AdminController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'index']);

Route::get('/redirects', [HomeController::class, 'redirects']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//Admin route
Route::get('/users', [AdminController::class, 'user']);
Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);

Route::get('/foodmenu', [AdminController::class, 'foodmenu']);
Route::get('/showmenu', [AdminController::class, 'showmenu']);
Route::post('/uploadfood', [AdminController::class, 'uploadfood']);
Route::get('/deletemenu/{id}', [AdminController::class, 'deletemenu']);
Route::get('/updatemenu/{id}', [AdminController::class, 'updatemenu']);
Route::post('/update/{id}', [AdminController::class, 'update']);

Route::post('/reservation', [AdminController::class, 'reservation']);
Route::get('/showreservation', [AdminController::class, 'showreservation']);

Route::get('/addchef', [AdminController::class, 'addchef']);
Route::post('/createchef', [AdminController::class, 'createchef']);
Route::get('/showchef', [AdminController::class, 'showchef']);
Route::get('/deletechef/{id}', [AdminController::class, 'deletechef']);
Route::get('/upchef/{id}', [AdminController::class, 'upchef']);
Route::post('/updatechef/{id}', [AdminController::class, 'updatechef']);


Route::post('/addcart/{id}', [HomeController::class, 'addcart']);
Route::get('/showcart/{id}', [HomeController::class, 'showcart']);
Route::get('/remove/{id}', [HomeController::class, 'remove']);

Route::post('/orderconfirm', [HomeController::class, 'orderconfirm']);

Route::get('/orders', [AdminController::class, 'orders']);
Route::get('/search', [AdminController::class, 'search']);
