<?php

Route::view('/', 'welcome')->name('home');

/* Definations */
Route::view('/stateless/protocole', 'definations/stateless')->name('definations.stateless');

/* HTTP */
Route::view('/http', 'http.http')->name('http.others');
Route::view('/http/home', 'http.home')->name('http.home');
Route::view('/http/overview', 'http.overview')->name('http.overview');
Route::view('/http/messages', 'http.messages')->name('http.messages');
Route::view('/http/requests', 'http.requests')->name('http.requests');
Route::view('/http/responses', 'http.responses')->name('http.responses');
/* end of HTTP */

/* Laravel */
Route::view('/laravel/routing', 'laravel.basic.routing.routing')->name('laravel.routing');
Route::view('/laravel/CSRFProtection', 'laravel.basic.CSRFProtection.CSRFProtection')->name('laravel.CSRFProtection');
Route::view('/laravel/controllers', 'laravel.basic.controllers.controllers')->name('laravel.controllers');
Route::view('/laravel/middleware', 'laravel.basic.middleware.middleware')->name('laravel.middleware');
Route::view('/laravel/requests', 'laravel.basic.requests.requests')->name('laravel.requests');
Route::view('/laravel/session', 'laravel.basic.session.session')->name('laravel.session');
Route::view('/laravel/views', 'laravel.basic.views.views')->name('laravel.views');



Route::view('/laravel/getting_started', 'laravel.database.getting_started')->name('laravel.getting_started');
Route::view('/laravel/query_builder', 'laravel.database.query_builder')->name('laravel.query_builder');

/* end of Laravel */

