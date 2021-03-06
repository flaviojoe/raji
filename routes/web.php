<?php

use App\Http\Controllers\Site\HomeController;
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
    return view('site.auth.login');
});

/* Route::namespace('Site')->group( function(){
    Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth'])->name('site.home');
}); */

Route::get('/dashboard', function () {
    return view('site.home.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/cadastro', function () {
    return view('site.admin.register');
})->middleware(['auth'])->name('site.cadastro');

Route::get('/ad', function() {
    return view('welcome');
});

require __DIR__.'/auth.php';
