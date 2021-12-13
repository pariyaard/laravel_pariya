<?php

use Illuminate\Support\Facades\Route;
use App\Models\Wishlist;
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

Route::get('/wishlist', function () {
    return view('wishlist',[
        'items' => Wishlist::all()
    ]);
});
Route::get('/addItem', function () {
    return view('addItem');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/wishlist/{item}', function (wishlist $item) {
    return view('item', [
        'item' => $item

    ]);
});

require __DIR__.'/auth.php';
