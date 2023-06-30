<?php
use App\Http\Controllers\EmployeeController;
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
    return view('welcome');
});



Route::get('/employeess',[EmployeeController::class,'index'])->name('employee.index');
Route::get('/employee/create',[EmployeeController::class,'create'])->name('employee.create');
Route::post('/employee/store',[EmployeeController::class,'store'])->name('employee.store');
Route::get('employee/edit/{id}',[EmployeeController::class,'edit'])->name('employee.edit');
Route::post('employee/update/{id}',[EmployeeController::class,'update'])->name('employee.update');
Route::get('employee/delete/{id}',[EmployeeController::class,'delete'])->name('employee.delete');