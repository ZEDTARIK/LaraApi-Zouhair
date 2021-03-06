<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::resource('/student', StudentController::class);
Route::resource('/employee', EmployeeController::class);
Route::get('/getEmployees',[ EmployeeController::class, 'getEmployees'])->name('getEmployees');
Route::post('/addEmployee',[ EmployeeController::class, 'addEmployee'])->name('addEmployee');
Route::put('/updateEmployee',[ EmployeeController::class, 'updateEmployee'])->name('updateEmployee');
Route::delete('/deleteEmployee/{id}',[ EmployeeController::class, 'deleteEmployee'])->name('deleteEmployee');
