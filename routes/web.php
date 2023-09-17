<?php

use Illuminate\Support\Facades\Route;

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
/*User */
Route::get('/','users@index');

Route::get('/sort/{id}','users@sort');

Route::get('/aboutus','users@aboutus');

Route::get('/signup','users@signup');
Route::post('/signup','users@insertsignup');

Route::get('/login','users@login');
Route::post('/login','users@insertlogin');

Route::get('/logout','users@logout')->middleware('stopuser');

Route::get('/description/{id}','users@description')->middleware('stopuser');

Route::get('/profil/{id}','users@profil')->middleware('stopuser');
Route::post('/update','users@update')->middleware('stopuser');

Route::get('/blog/{id}','users@blog')->middleware('stopuser');
Route::get('/delete/{id}','users@delete')->middleware('stopuser');
Route::get('/create','users@create')->middleware('stopuser');
Route::post('/create','users@insertcreate')->middleware('stopuser');



/*Admin */

Route::get('/admin','admin@admincontrol')->middleware('stopadmin');

Route::get('/user','admin@usercontrol')->middleware('stopadmin');

Route::get('/deleteuser/{id}','admin@deleteuser')->middleware('stopadmin');

