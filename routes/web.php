<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
Route::get('/test', function () {
    return view('test');
});
Route::get('/dashboard', function () {
    return view('auth.dashboard');
});

//Login Routes
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'login'])->name('login.custom');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

//Student Pages Routes
Route::get('subject', function(){
    return view('student.subject');
});