<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\EmployeeDepartmentHistory;
use Illuminate\Http\Request;

class AdminEmployeeDepartmentHistory extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Employee Department History - Human Resource";
        $employeedepartmenthistorys = EmployeeDepartmentHistory::paginate(10);
        return view(view: 'admin.employeedepartmenthistory.index', data: compact('employeedepartmenthistorys'))->with(key: "viewData", value: $viewData);
    }
}
