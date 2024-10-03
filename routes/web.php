<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get(
    '/admin',
    'App\Http\Controllers\Admin\AdminHomeController@index'
)
    ->name("admin.home.index");

// employee
Route::get(
    '/admin/employee',
    'App\Http\Controllers\Admin\AdminEmployeeController@index'
)
    ->name("admin.employee.index");

Route::post(
    "/admin/employee/store",
    "App\Http\Controllers\Admin\AdminEmployeeController@store"
)
    ->name("admin.employee.store");

Route::get(
    '/admin/employee/{BusinessEntityID}/show',
    'App\Http\Controllers\Admin\AdminEmployeeController@show'
)
    ->name("admin.employee.show");

Route::get(
    '/admin/employee/{BusinessEntityID}/edit',
    'App\Http\Controllers\Admin\AdminEmployeeController@edit'
)
    ->name("admin.employee.edit");

Route::put(
    '/admin/employee/{BusinessEntityID}/update',
    'App\Http\Controllers\Admin\AdminEmployeeController@update'
)
    ->name("admin.employee.update");

Route::delete(
    '/admin/employee/{BusinessEntityID}/delete',
    'App\Http\Controllers\Admin\AdminEmployeeController@delete'
)
    ->name("admin.employee.delete");

//department
Route::get(
    '/admin/department',
    'App\Http\Controllers\Admin\AdminDepartmentController@index'
)
    ->name("admin.department.index");
Route::post(
    "/admin/department/store",
    "App\Http\Controllers\Admin\AdminDepartmentController@store"
)
    ->name("admin.department.store");

Route::get(
    '/admin/department/{DepartmentID}/show',
    'App\Http\Controllers\Admin\AdminDepartmentController@show'
)
    ->name("admin.department.show");

Route::get(
    '/admin/department/{DepartmentID}/edit',
    'App\Http\Controllers\Admin\AdminDepartmentController@edit'
)
    ->name("admin.department.edit");

Route::put(
    '/admin/department/{DepartmentID}/update',
    'App\Http\Controllers\Admin\AdminDepartmentController@update'
)
    ->name("admin.department.update");

Route::delete(
    '/admin/department/{DepartmentID}/delete',
    'App\Http\Controllers\Admin\AdminDepartmentController@delete'
)
    ->name("admin.department.delete");

//shift
Route::get(
    '/admin/shift',
    'App\Http\Controllers\Admin\AdminShiftController@index'
)
    ->name("admin.shift.index");
Route::post(
    "/admin/shift/store",
    "App\Http\Controllers\Admin\AdminShiftController@store"
)
    ->name("admin.shift.store");

Route::get(
    '/admin/shift/{ShiftID}/show',
    'App\Http\Controllers\Admin\AdminShiftController@show'
)
    ->name("admin.shift.show");

Route::get(
    '/admin/shift/{ShiftID}/edit',
    'App\Http\Controllers\Admin\AdminShiftController@edit'
)
    ->name("admin.shift.edit");

Route::put(
    '/admin/shift/{ShiftID}/update',
    'App\Http\Controllers\Admin\AdminShiftController@update'
)
    ->name("admin.shift.update");

Route::delete(
    '/admin/shift/{ShiftID}/delete',
    'App\Http\Controllers\Admin\AdminShiftController@delete'
)
    ->name("admin.shift.delete");

// department history
Route::get(
    '/admin/employeedepartmenthistory',
    'App\Http\Controllers\Admin\AdminEmployeeDepartmentHistory@index'
)
    ->name("admin.employeedepartmenthistory.index");

//--Report

Route::get('/admin/report/employees', 'App\Http\Controllers\Admin\AdminReportController@employeeReport')
    ->name('admin.report.employee');


Route::get('/admin/report/shifts', 'App\Http\Controllers\Admin\AdminReportController@shiftReport')
    ->name('admin.report.shift');