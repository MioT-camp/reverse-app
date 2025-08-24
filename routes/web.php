<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
});

Volt::route('/reverse/{word}', 'reverse');

Volt::route('/upper/abc', 'upper');

Volt::route('/lower/ABC', 'lower');
