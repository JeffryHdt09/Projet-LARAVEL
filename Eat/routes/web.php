<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nbParcels = 3;
    return view('welcome', ['nbParcels' =>$nbParcels]);
});
