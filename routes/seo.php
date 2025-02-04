<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// prefix with seo
Route::prefix('seo')->group(function () {
    Route::get('/sitemap', [SEOController::class, 'seteMap']);
});

