<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/', function () {
    return view('welcome');
});
Route::get('/t', function () {
    return view('test');
});
Route::get('/test1', function () {
    return view('About_us.index');
});
	Route::get('contact',function(){
		return View::make('contact_us.index');
	});
Route::get('/home',[HomeController::class,'index'])->name('home');

	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/', function()
	{
		return View::make('hello');
	});

	Route::get('test',function(){
		return View::make('test');
	});
	
	Route::get('/products', [ProductController::class, 'index'])->name('products.index');
	Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');
	Route::get('/contact_us', [ContactController::class, 'index'])->name('contact');
	
	Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

});