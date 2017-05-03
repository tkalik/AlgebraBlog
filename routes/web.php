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

Route::get('/', function () {
	$items = DB::table('items')->get();
    return view('welcome',compact ('items'));
});

Route::get('item/{id}' , function($id)
{
	$item = DB::table('items')->find($id);

	return view('items.show',compact('item'));
});