<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get(
    '/admin',
    'App\Http\Controllers\Admin\AdminHomeController@index'
)
    ->name("admin.home.index");

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

Route::get(
    '/admin/department',
    'App\Http\Controllers\Admin\AdminDepartmentController@index'
)
    ->name("admin.department.index");

Route::get(
    '/admin/shift',
    'App\Http\Controllers\Admin\AdminShiftController@index'
)
    ->name("admin.shift.index");

Route::get(
    '/admin/employeedepartmenthistory',
    'App\Http\Controllers\Admin\AdminEmployeeDepartmentHistory@index'
)
    ->name("admin.employeedepartmenthistory.index");