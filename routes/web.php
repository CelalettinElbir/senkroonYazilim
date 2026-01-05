<?php

use App\Http\Controllers\AdvisorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;




Route::controller(Homecontroller::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    // route::get('/hakkimizda', 'about')->name('home.about');
    Route::get('/iletisim', 'contactUs')->name('contact-us');
    Route::post('/iletisim', 'contactUsSubmit')->name('contact-us.submit');
});


use App\Http\Controllers\ModuleController;
use App\Http\Controllers\SectorController;

Route::prefix('workcube-modulleri')->group(function () {
    Route::get('/', [ModuleController::class, 'index'])->name('modules.index');
    Route::get('/{module}', [ModuleController::class, 'show'])->name('modules.show');
});


Route::prefix('mikro-modulleri')->group(function () {
    Route::get('/', [ModuleController::class, 'mikroIndex'])->name('modules.mikroIndex');
    Route::get('/{module}', [ModuleController::class, 'mikroShow'])->name('modules.mikroShow');
});




Route::prefix('sektorel-uygulamalar')->group(function () {
    Route::get('/', [SectorController::class, 'index'])->name('sectors.index');
    Route::get('/{slug}', [SectorController::class, 'show'])->name('sectors.show');
});



Route::prefix("danismanlik-cozumleri")->group(function(){
    Route::get('/', [AdvisorController::class, 'index'])->name('advisors.index');
    Route::get('/{slug}', [AdvisorController::class, 'show'])->name('advisors.show');
});
