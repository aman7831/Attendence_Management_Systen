<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::post('/leave/store', [App\Http\Controllers\LeaveController::class, 'store']);
Route::post('/leave/{id}', [App\Http\Controllers\LeaveController::class, 'update']);
Route::get('/leave/{id}', [App\Http\Controllers\LeaveController::class, 'destroy']);


Route::resources([
    'attendence' => App\Http\Controllers\AttendenceController::class,
    'leave' => App\Http\Controllers\LeaveController::class,
]);