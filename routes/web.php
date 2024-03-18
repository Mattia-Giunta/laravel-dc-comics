<?php

use App\Http\Controllers\backend\ComicController;
use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {

//     $cards = config('comics');

//     return view('page.home', compact('cards'));
// });

Route::get('/', [PageController::class, 'index'])->name('homePage');


// Route::get('/caracters', function () {

//     return view('page.caracters');

// });

Route::resource('comics', ComicController::class );
