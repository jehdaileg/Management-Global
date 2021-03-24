<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SizeController;
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

Route::get('/template', function(){
	return view('layouts.master');
});

Route::get('/draft',function() {

	return view('draft');

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
	return view('dashboard');
})->name('dashboard');


//Groupes des routes dont l'authentification est obligatoire 

Route::middleware(['auth:sanctum', 'verified'])->group(function (){


	     //GESTION CATEGORY 
	Route::resource('/categories', CategoryController::class);

	    // GESTION BRAND 
	Route::resource('/brands', BrandController::class);

	   //GESTION SIZE 
	Route::resource('/sizes', SizeController::class);



});




