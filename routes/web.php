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

Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/login', function () {
    return view('customAuth.login');
})->name('login');


Route::get('/categories/{categorie}', function () {
    return view('categories.index');
})->name('categorie');

Route::get('/categories/{categorie}/1', function () {
    return view('products.index');
})->name('product');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
