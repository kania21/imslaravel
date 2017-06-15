<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


route:: get('/','HomeController@Home');
route:: get('/signup','HomeController@Signup');
route:: get('/topic','HomeController@Topic');
route:: get('/unit','HomeController@Unit');




