<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\EmployeeDepartmentHistory;
use App\Models\Employee;


class AdminDepartmentController extends Controller
{
    public function index(Request $request)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Department - Human Resource";
        $departments = Department::all();

        return view('admin.department.index', compact('departments'))->with('viewData', $viewData);
    }

    public function store(Request $request)
    {
        $request->validate(rules: [
            "Name" => "required|max:255",
            "GroupName" => "required|max:255",
        ]);

        Department::create($request->all());

        return back()->with('success', 'Department created successfully.');
    }

    public function show($DepartmentID)
    {
        $viewData = [];
        $viewData['department'] = Department::findOrFail($DepartmentID);
        $viewData['employees'] = EmployeeDepartmentHistory::where('DepartmentID', $DepartmentID)->with('employee')->get();
        // $shopping_cart = ShoppingCart::with(['items', 'items.product'])->find($id);
        // $viewData['employees'] = Employee::with(["employeeHistories",""]) -> find($DepartmentID  );

        $viewData["title"] = "Admin - Department Detail - Human Resource";
        return view('admin.department.show')->with('viewData', $viewData);
    }

    public function edit($DepartmentID)
    {
        $viewData = [];
        $viewData['title'] = 'Admin Page - Edit Department - Human Resource';

        $department = Department::findOrFail($DepartmentID);

        return view('admin.department.edit', compact('department'))->with('viewData', $viewData);
    }

    public function update(Request $request, $DepartmentID)
    {
        $request->validate([
            "Name" => "required|max:255",
            "GroupName" => "required|max:255",
        ]);

        $department = Department::findOrFail($DepartmentID);
        $department->Name = $request->input('Name');
        $department->GroupName = $request->input('GroupName');
        $department->ModifiedDate = Carbon::now();

        $department->save();

        return redirect()->route('admin.department.index')->with("success", "Department updated successfully.");
    }

    public function delete($DepartmentID)
    {
        $department = Department::findOrFail($DepartmentID);
        $department->delete();

        return redirect()->route('admin.department.index')->with('success', 'Department removed successfully.');
    }
}