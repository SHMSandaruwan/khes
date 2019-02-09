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

Route::resource('khes/classrooms', 'Khes\\ClassroomsController');
Route::resource('khes/students', 'Khes\\StudentsController');
Route::resource('khes/teachers', 'Khes\\TeachersController');
Route::resource('khes/years', 'Khes\\YearsController');
Route::resource('khes/assign-student', 'Khes\\AssignStudentController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



