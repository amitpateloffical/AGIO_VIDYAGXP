<?php

use App\Http\Controllers\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\API\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/test', function ($lastNumber = 'S-0') {
    $prefix         = 'S-';
    $number         = str_replace($prefix, '', $lastNumber) + 1;
    $lengthOfNumber = strlen($number);
    $numberOfZeros  = 6 - $lengthOfNumber;
    $totalLength    = $numberOfZeros + $lengthOfNumber;
    $invoiceNumber  = str_pad($number, $totalLength, '0', STR_PAD_LEFT);
    return $prefix  = 'S-' . $invoiceNumber;
});


Route::get('/clear', function () {
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
});

Route::controller('SiteController')->group(function () {
    Route::get('placeholder-image/{size}', 'placeholderImage')->name('placeholder.image');
});


Route::get('/', function () {
    return to_route('admin.dashboard');
})->name('home');

 Route::get('/admin/login', 'AdminAuthController@showLoginForm')->name('admin.login');
 
 
 
    Route::get('create', [ProductController::class, 'create'])->name('create');
    Route::post('store', [ProductController::class, 'store'])->name('store');
    Route::post('/print/{id}',  [ProductController::class, 'print'])->name('print');
    Route::get('show', [ProductController::class, 'show'])->name('show');
    Route::get('edit/{id}', [ProductController::class, 'Editshow'])->name('Editshow');
    Route::get('update-container-status/{container}', [ProductController::class, 'updateStatus'])->name('update_container_status');
    Route::post('update/{id}', [ProductController::class, 'update'])->name('update');
    Route::get('document', [ProductController::class, 'document'])->name('document');
        
    Route::get('all-barcode', [ProductController::class, 'dashboard'])->name('admin.barcode'); 
    