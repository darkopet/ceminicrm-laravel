<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\CompanyController;
use app\Http\Controllers\EmployeeController;

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

Route::get('/employees', [new EmployeeController(), 'index']);
Route::get('/employees/index', [new EmployeeController(), 'index']);
Route::get('/companies', new CompanyController(), 'index');
Route::get('/companies/index', new CompanyController(), 'index');
