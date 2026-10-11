<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/***** Home *****/
Route::get('/', [HomeController::class, 'index'])->name('home');
	
	/***** 產品設定 *****/
	/* Route::middleware([AccessPermissionMiddleware::class . Str::start(Functions::PRODUCT->value, ':')])->group(function(){
		Route::get('product', [ProductController::class, 'list'])->name('products');
		Route::get('product/list', [ProductController::class, 'list'])->name('product.list');
		Route::get('product/create', [ProductController::class, 'showCreate'])->name('product.create');
		Route::post('product/create', [ProductController::class, 'create'])->name('product.create.post');
		Route::get('product/update/{id}', [ProductController::class, 'showUpdate'])->name('product.update');
		Route::post('product/update', [ProductController::class, 'update'])->name('product.update.post');
		Route::post('product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
	}); */
	
