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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/admin', [AuthController::class,'dashboard'])->name('admin');
Route::get('/admin/login', [AuthController::class,'showLoginForm'])->name('admin.login');
Route::get('/admin/logout', [AuthController::class,'logout'])->name('admin.logout');
Route::post('/admin/login/do', [AuthController::class,'login'])->name('admin.login.do');

require __DIR__.'/auth.php';
