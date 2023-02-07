<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\UserController;
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
    return redirect('home');
    //return view('welcome');
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('home',function (){
   return view('home');
});

Route::get('logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');

Route::get('profil',[UserController::class,'profil'])->name('profil');
Route::get('liste-users',[UserController::class,'index'])->name('list_users');

require __DIR__.'/auth.php';
