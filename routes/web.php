<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('balancesheet');
});

Route::get('/customerBalance', function () {
    return view('customerBalance');
});