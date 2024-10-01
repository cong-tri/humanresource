<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminEmployeeController extends Controller
{
    public function index(Request $request)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Employee - Human Resource";

        if ($request->has('txtSearch')) {
            $search = $request->query('txtSearch');
            $employees = Employee::where('BusinessEntityID', $search)->get();
        } else {
            $employees = Employee::all();
        }

        // $employees = Employee::paginate(10);
        return view(view: 'admin.employee.index', data: compact('employees'))->with(key: "viewData", value: $viewData);
    }
    public function store(Request $request)
    {
        $request->validate(rules: [
            "NationalIDNumber" => "required|max:255",
            "LoginID" => "required|max:255",
            "JobTitle" => "required|max:255",
            "BirthDate" => "required|date",
            "MaritalStatus" => "required|max:255",
            "Gender" => "required|max:2",
            "HireDate" => "required|date",
        ]);

        Employee::create($request->all());

        return back();
    }
    public function delete($BusinessEntityID)
    {
        $employee = Employee::where(column: 'BusinessEntityID', operator: $BusinessEntityID)->firstOrFail();
        $employee->delete();

        // $employee = Employee::where(column: 'BusinessEntityID', operator: $BusinessEntityID)-> delete();
        return redirect()->route('admin.employee.index')->with('success', 'Employee removed successfully');
    }
}

