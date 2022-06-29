<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CompanyController;

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

Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/employees/index', [EmployeeController::class, 'index']);
Route::get('/companies', [CompanyController::class, 'index']);
Route::get('/companies/index', [CompanyController::class, 'index']);

Route::get('/employees/create', [EmployeeController::class, 'create']);
Route::post('/employees/create', [EmployeeController::class, 'store']);
Route::get('/companies/create', [CompanyController::class, 'create']);
Route::post('/controller/create', [CompanyController::class, 'store']);

Route::get('employees/update', [EmployeeController::class, 'update']);
Route::post('employees/update', [EmployeeController::class, 'update']);
Route::get('companies/update', [CompanyController::class, 'update']);
Route::post('companies/update', [CompanyController::class, 'update']);

Route::delete('employees/delete', [EmployeeController::class, 'destroy']);
Route::delete('companies/delete', [CompanyController::class, 'destroy']);

// Route::get('/employees', [new EmployeeController(), 'index']);
// Route::get('/employees/index', [new EmployeeController(), 'index']);
// Route::get('/companies', new CompanyController(), 'index');
// Route::get('/companies/index', new CompanyController(), 'index');

// Route::get('/employees/create', [new EmployeeController(), 'create']);
// Route::post('/employees/create', [new EmployeeController(), 'create']);
// Route::get('/companies/create', [new CompanyController(), 'create']);
// Route::post('/companies/create', [new CompanyController(), 'create']);