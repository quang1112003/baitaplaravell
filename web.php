<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
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
Route::get("/about",[WebController::class,"aboutUs"]);
Route::get("/class/list",[\App\Http\Controllers\ClassesController::class,"all"]);
Route::get("/student/list",[\App\Http\Controllers\StudentsController::class,"all"]);


Route::get('/list-classes', function () {
    return view('classes/list-classes');
});
Route::get('/add-classes', function () {
    return view('classes/add-classes');
});
Route::get('/edit-classes', function () {
    return view('classes/edit-classes');
});
Route::get('/list-scores', function () {
    return view('scores/list-scores');
});
Route::get('/add-scores', function () {
    return view('scores/add-scores');
});
Route::get('/edit-scores', function () {
    return view('scores/edit-scores');
});

Route::get('/list-subjects', function () {
    return view('subjects/list-subjects');
});
Route::get('/add-subjects', function () {
    return view('subjects/add-subjects');
});
Route::get('/edit-subjects', function () {
    return view('subjects/edit-subjects');
});
Route::get('/list-students', function () {
    return view('students/list-students');
});
Route::get('/add-students', function () {
    return view('students/add-students');
});
Route::get('/edit-students', function () {
    return view('students/edit-students');
});
