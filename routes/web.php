<?php

use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;

Route::namespace('Site')->group(function () {
    Route::get('/', [HomeController::class,'index'])->name('site.index');

    Route::get('/flavio/{slug}', [HomeController::class,'show']);
});
