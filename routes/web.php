<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
	return view('welcome');
});
Route::get('/products/all', function () {
	return view('products.all-products');
})->name('products.all');

Route::get('/products/frozen', function () {
	return view('products.frozen');
})->name('products.frozen');

Route::get('/products/parts', function () {
	return view('products.parts');
})->name('products.parts');

Route::get('/products/artificial', function () {
	return view('products.artificial');
})->name('products.artificial');

//frozen
Route::get('/ar/frozen/800', function () {
	return view('ar.frozen.800.index');
})->name('ar.frozen.800.index');
Route::get('/ar/frozen/700', function () {
	return view('ar.frozen.700.index');
})->name('ar.frozen.700.index');

Route::get('/product-details', function () {
	return view('product-details');
})->name('product-details');

//parts
Route::get('/ar/parts/cubic', function () {
	return view('ar.parts.cubic.index');
})->name('ar.parts.cubic.index');
Route::get('/ar/parts/fillet', function () {
	return view('ar.parts.fillet.index');
})->name('ar.parts.fillet.index');
Route::get('/ar/parts/drumsticks', function () {
	return view('ar.parts.drumsticks.index');
})->name('ar.parts.drumsticks.index');