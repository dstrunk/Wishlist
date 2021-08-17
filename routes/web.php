<?php

use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WishlistController::class, 'index'])->name('wishlists.index');
Route::get('/wishlists/{list}', [WishlistController::class, 'show'])->name('wishlists.show');
