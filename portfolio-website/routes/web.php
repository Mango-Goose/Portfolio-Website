<?php

use Illuminate\Support\Facades\Route;

#Navigation Pages
Route::get('/', function () {return view('home');});
Route::get('about', function(){return view('about');});
Route::get('contact', function(){return view('contact');});
Route::get('portfolio', function(){return view('portfolio');});
Route::get('experience', function(){return view('experience');});

#Routes for the project pages
Route::get('farmtofork', function(){return view('projects/farmtofork');});
Route::get('cavernclimb', function(){return view('projects/cavernclimb');});
Route::get('dreamscape', function(){return view('projects/dreamscape');});
Route::get('mineralsandmayhem', function(){return view('projects/mineralsandmayhem');});
