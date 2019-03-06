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
    return view('welcome');
});


Route::prefix('/students')->group(function (){
    Route::get('/','studentsController@index',  function(){
        return view("students.index");
    });
    Route::get('/info/{id}','studentsController@info', function($id){
        return "Student Id is : $id " ;

    });

    Route::get('/about','studentsController@about', function(){
        return view("students.about");

    });

});
Route::prefix('/city')->group(function (){
    Route::get('/','cityController@index',  function(){
        return view("city.index");
    });



});





