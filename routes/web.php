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
    return view('welcome');
})->name('index');
Route::get('/produits', [App\Http\Controllers\ProductsController::class, 'index'])->name('products');
Route::get('/produit/{slug}', [App\Http\Controllers\ProductsController::class, 'show'])->name('product.show');
Route::get('/search', [App\Http\Controllers\ProductsController::class, 'search'])->name('products.search');
Route::get('/apropos', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'show'])->name('contact');
Route::post('/contact/send', [App\Http\Controllers\ContactController::class, 'mailContactForm'])->name('mailContactForm');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
