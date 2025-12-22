<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    route::get('/hakkimizda', 'about')->name('home.about');
});



use App\Http\Controllers\ModuleController;

Route::prefix('workcube-modulleri')->group(function () {
    Route::get('/', [ModuleController::class, 'index'])->name('modules.index');
    Route::get('/{module}', [ModuleController::class, 'show'])->name('modules.show');
});
