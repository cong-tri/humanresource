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