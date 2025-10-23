<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'PPI Kastamonu - Home Page';
    return view('user.home', compact('title'));
});

Route::get('/about', function () {
    $title = 'PPI Kastamonu - About Us';
    return view('user.about', compact('title'));
});

Route::get('/activity', function () {
    $title = 'PPI Kastamonu -  Our Activities';
    return view('user.activity', compact('title'));
});


