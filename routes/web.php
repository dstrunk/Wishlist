<?php

use App\Http\Controllers\WishListController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WishListController::class, 'index'])->name('idealists.index');
Route::get('/wishlists/{list}', [WishListController::class, 'show'])->name('idealists.show');
