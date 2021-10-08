<?php

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


//VISTA DEL CLIENTE
Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('layouts.prueba');
});

Route::get('/productos', function () {
    return view('web.shop_grid');
});

Route::get('/detalles', function () {
    return view('web.product_details');
});

Route::get('/micuenta', function () {
    return view('web.my_account');
});

Route::get('/registro', function () {
    return view('web.login_register');
});

Route::get('/contacto', function () {
    return view('web.contact_us');
});

Route::get('/carrito', function () {
    return view('web.cart');
});

Route::get('/nosotros', function () {
    return view('web.about_us');
});

Route::get('/pagar', function () {
    return view('web.checkout');
});


//VISTA DEL ADMINISTRADOR
//Route::resource('categories', 'CategoryController')->names('categories');
Route::resource('/categories', CategoryController::class)->names('categories');
//Route::resource('clients', 'ClientController')->names('clients');
Route::resource('/clients', ClientController::class)->names('clients');
//Route::resource('products', 'ProductController')->names('products');
Route::resource('/products', ProductController::class)->names('products');
//Route::resource('providers', 'Providerontroller')->names('providers');
Route::resource('/providers', Providerontroller::class)->names('providers');
//Route::resource('sales', 'SaleController')->names('sales');
Route::resource('/sales', SaleController::class)->names('sales');
