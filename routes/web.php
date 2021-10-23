<?php

use App\Http\Livewire\AddToCart;
use App\Http\Livewire\AddToCartView;
use App\Http\Livewire\Back;
use App\Http\Livewire\Buy;
use App\Http\Livewire\BuyDetail;
use App\Http\Livewire\Home;
use App\Http\Livewire\ProductDetail;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Remove;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum', 'verified'])->get('/', Home::class)->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/profile', Profile::class)->name('profile');
Route::middleware(['auth:sanctum', 'verified'])->get('/product_detail/{id}', ProductDetail::class)->name('product-detail');
Route::middleware(['auth:sanctum', 'verified'])->get('/addtocart/{id}', AddToCart::class)->name('addtocart');
Route::middleware(['auth:sanctum', 'verified'])->get('/addtocartview', AddToCartView::class)->name('addtocartview');
Route::middleware(['auth:sanctum', 'verified'])->get('/buy/{id}', Buy::class)->name('buy');
Route::middleware(['auth:sanctum', 'verified'])->get('/remove/{id}', Remove::class)->name('remove');
Route::middleware(['auth:sanctum', 'verified'])->get('/buydetail', BuyDetail::class)->name('buydetail');