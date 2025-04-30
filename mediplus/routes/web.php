<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    $title = 'Mediplus - Free Medical and Doctor Directory HTML Template.';
    return view('home',compact('title'));
})->name('home');

Route::get('/contact us', function () {
    $title = 'Mediplus-Contact Us';
    return view('contact',compact('title'));
})->name('contact');

Route::get('/Error404', function () {
    $title = 'Error 404';
    return view('error404',compact('title'));
})->name('error');

Route::get('/blog-single', function () {
    $title = 'Midiplus-Blog Single';
    return view('blogSingle',compact('title'));
})->name('blog');

Route::get('/portfolio', function () {
    $title = 'Midiplus-portfolio';
    return view('portfolio',compact('title'));
})->name('portfolio');
