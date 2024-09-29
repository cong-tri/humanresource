<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class AdminDepartmentController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Department - Human Resource";
        $viewData["department"] = Department::all();
        return view(view: 'admin.department.index')->with(key: "viewData", value: $viewData);
    }
}
