<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrinkDetailController extends Controller
{
    //
    // Sample Controller method
public function showFlavorbs()
{
    $flavors = ['vanilla', 'chocolate', 'strawberry', 'mint'];

    return view('drinkDetail', compact('flavors'));
}

}
