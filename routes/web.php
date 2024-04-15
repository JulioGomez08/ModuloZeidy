<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\ExportPdfController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportePlusController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\TestController;
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
    return redirect()->route('reportes.index');// view('welcome');
    //return view('reportes.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('reportes', ReportesController::class)->names('reportes');
    Route::resource('reporteplus', ReportePlusController::class)->names('reporteplus');
    Route::resource('graficas', ChartsController::class)->names('graficas');
    Route::resource('export',ExportPdfController::class)->names('export');
});

require __DIR__ . '/auth.php';

Route::resource('test', TestController::class)->names('test');
