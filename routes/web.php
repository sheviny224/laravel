<?php

use Illuminate\Support\Facades\Route;

Route::get('/planeten', function () {
    $planeten = ["mars", "jupiter", "uranus", "pluto", "arrde", "neptunus", "venus"];
    return ($planeten);
});


Route::get('/', function () {
    $planeten = ["mars", "jupiter", "uranus", "pluto", "arrde", "neptunus", "venus"];
    return view('welcome')->with(['planeten' => $planeten]);
});
