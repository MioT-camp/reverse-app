<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
});

Volt::route('/reverse/{word}', 'reverse');

Volt::route('/{page}/{word}', 'upper');

// Volt::route('/lower/ABC', 'lower');
