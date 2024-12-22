<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    sleep(3);
    return Inertia::render('Dashboard');
});

Route::inertia('/login', 'Auth/Login');


