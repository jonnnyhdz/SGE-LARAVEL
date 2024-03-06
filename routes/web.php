<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('DashboardAdmin');
});

Route::get('/Alumnos', function () {
    return view('CrudAlumnos');
});

Route::get('/DocumentosAlumnos', function () {
    return view('ControlDocAlumno');
});


Route::get('/Gavo', function () {
    return view('Gavo');
});
