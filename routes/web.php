<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\SpaController;
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

Route::get('/spa/{any?}', [SpaController::class, 'index'])
    ->where('any', '.*')
    ->name('spa');

Route::prefix('pdf')->group(function() {
    Route::get('/preview', [PdfController::class, 'preview'])->name('pdf.preview');
    Route::get('/download', [PdfController::class, 'download'])->name('pdf.download');
    Route::get('/stream', [PdfController::class, 'stream'])->name('pdf.stream');
    Route::get('/hh', [PdfController::class, 'hhStream'])->name('hh.stream');
});
