<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkDetailController;
use App\Models\Listing;
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
    return view('listings',[
        'heading' => 'Latest Listings',
        'listings' => Listing::all(),
    ]);
});
Route::get('/drinkdetail', [DrinkDetailController::class, 'showFlavorbs']);
