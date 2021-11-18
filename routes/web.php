<?php

Route::view('/', 'welcome')->name('home');
Route::view('/defination', 'definations.defination')->name('defination');

/* Definations */
Route::view('/stateless/protocole', 'definations/stateless')->name('definations.stateless');



/* *******************       PHP       ************************************ */
Route::view('/php/array_functions', 'php.array_functions.array_functions')->name('php.array.functions');
Route::view('/php/timeDate', 'php.time_date.time_date')->name('php.time_date.time_date');
Route::view('/php/definations', 'php.definations.definations')->name('php.definations.definations');

// The essentials of Object Oriented PHP  -- Joseph Benharosh
Route::view('/oop/Introduction', 'oop_Joseph.Introduction')->name('oop.Introduction');
Route::view('/oop/create-classes-objects', 'oop_Joseph.create-classes-objects')->name('oop.create-classes-objects');
Route::view('/oop/this-keyword', 'oop_Joseph.this-keyword')->name('oop.this-keyword');
Route::view('/oop/Chaining-methods-propertie', 'oop_Joseph.Chaining-methods-propertie')->name('oop.Chaining-methods-propertie');
Route::view('/oop/Access-modifiers', 'oop_Joseph.Access-modifiers')->name('oop.Access-modifiers');


/* end of PHP */




/* **************************        HTTP     *********************/
Route::view('/http', 'http.http')->name('http.others');
Route::view('/http/home', 'http.home')->name('http.home');
Route::view('/http/overview', 'http.overview')->name('http.overview');
Route::view('/http/messages', 'http.messages')->name('http.messages');
Route::view('/http/requests', 'http.requests')->name('http.requests');
Route::view('/http/responses', 'http.responses')->name('http.responses');
/* ************* end of HTTP ***************** */



/* ******************************    Laravel ******************************* */

// Basic  
Route::view('/laravel/routing', 'laravel.basic.routing.routing')->name('laravel.routing');
Route::view('/laravel/CSRFProtection', 'laravel.basic.CSRFProtection.CSRFProtection')->name('laravel.CSRFProtection');
Route::view('/laravel/controllers', 'laravel.basic.controllers.controllers')->name('laravel.controllers');
Route::view('/laravel/middleware', 'laravel.basic.middleware.middleware')->name('laravel.middleware');
Route::view('/laravel/requests', 'laravel.basic.requests.requests')->name('laravel.requests');
Route::view('/laravel/session', 'laravel.basic.session.session')->name('laravel.session');
Route::view('/laravel/views', 'laravel.basic.views.views')->name('laravel.views');



// Database 
Route::view('/laravel/database/getting_started', 'laravel.database.getting_started')->name('laravel.database.get_started');
Route::view('/laravel/database/query_builder', 'laravel.database.query_builder')->name('laravel.query_builder');

// Eloquent 
Route::view('/laravel/eloquent/getting_started', 'laravel.eloquent.getting_started')->name('laravel.eloquent.getting_started');

// Security
Route::view('/laravel/authentication', 'laravel.Security.authentication')->name('laravel.authentication');

// Digging Depper
Route::view('/laravel/mail', 'laravel.DiggingDeeper.mail')->name('laravel.mail');

// oReally Book documents
Route::view('/oReally/Chapter1', 'oReally.Chapter1')->name('oReally.Chapter1');
Route::view('/oReally/Chapter2', 'oReally.Chapter2')->name('oReally.Chapter2');
Route::view('/oReally/Chapter3', 'oReally.Chapter3')->name('oReally.Chapter3');
Route::view('/oReally/Chapter5', 'oReally.Chapter5')->name('oReally.Chapter5');


/* end of Laravel */



