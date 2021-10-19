<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\ProductDetail;
use App\Http\Livewire\Profile;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum', 'verified'])->get('/', Home::class)->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/profile', Profile::class)->name('profile');
Route::middleware(['auth:sanctum', 'verified'])->get('/product_detail/{id}', ProductDetail::class)->name('product-detail');