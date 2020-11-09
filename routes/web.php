<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () { return view('auth.login');});


Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'App\Http\Controllers\AppController@goToBorrowedBooks');
    Route::get('/dashboard/{id}',  'App\Http\Controllers\AppController@borrowedbooks')->name('dashboard');
    Route::get('/borrow/{book}','App\Http\Controllers\AppController@borrow');
    Route::get('/unborrow/{book}','App\Http\Controllers\AppController@unborrow');
    Route::get('/allbooks', 'App\Http\Controllers\AppController@studentAllBooks');   
    Route::get('/detailes/{book}','App\Http\Controllers\AppController@bookDetailes');
    Route::get('/studentprofile', 'App\Http\Controllers\AppController@studentProfile');
});


Route::group(['middleware' =>['auth','admin'] ],function (){
    Route::get('/home','App\Http\Controllers\AppController@index' );
    Route::get('/add', 'App\Http\Controllers\AppController@create');
    Route::post('/submit','App\Http\Controllers\AppController@store');
    Route::get('/edit/{book}','App\Http\Controllers\AppController@edit');
    Route::post('/update/{book}','App\Http\Controllers\AppController@update');
    Route::get('/delete/{book}','App\Http\Controllers\AppController@destroy');
    Route::get('/borrow','App\Http\Controllers\AppController@borrowedBooksAdmin');
    Route::get('/show/{book}','App\Http\Controllers\AppController@show');
    Route::post('/search', 'App\Http\Controllers\AppController@search');
    Route::get('/moredetails/{id}', 'App\Http\Controllers\AppController@moreDetails');
    Route::get('/profile', 'App\Http\Controllers\AppController@profile');
    Route::post('/updateadmin/{user}','App\Http\Controllers\AppController@updateadmin');
    Route::get('/liststudents', 'App\Http\Controllers\AppController@showAllStudents'); 
});




//PhpStorm