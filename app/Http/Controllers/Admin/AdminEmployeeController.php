<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\EmployeeDepartmentHistory;
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
    public function show($BusinessEntityID)
    {
        $viewData = [];
        $employee = Employee::findOrFail(id: $BusinessEntityID);

        // $departmentHistory = EmployeeDepartmentHistory::findOrFail(id: $BusinessEntityID);

        $viewData["title"] = "Admin - Employee Detail - Human Resource";
        return view(view: 'admin.employee.show', data: compact('employee'))->with(key: "viewData", value: $viewData);
    }
    public function edit($BusinessEntityID)
    {
        $viewData = [];
        $viewData['title'] = 'Admin Page - Edit Product - Human Resource';
        $employee = Employee::findOrFail(id: $BusinessEntityID);
        return view(view: 'admin.employee.edit', data: compact(var_name: 'employee'))->with(key: "viewData", value: $viewData);
    }
    public function update(Request $request, $BusinessEntityID)
    {
        $request->validate([
            "NationalIDNumber" => "required|max:255",
            "LoginID" => "required|max:255",
            "OrganizationNode" => "required|max:255",
            'OrganizationLevel' => "required|numeric|gt:0",
            "JobTitle" => "required|max:255",
            "BirthDate" => "required|date",
            "MaritalStatus" => "required|max:255",
            "Gender" => "required|max:2",
            "HireDate" => "required|date",
            "VacationHours" => "required|numeric|gt:0",
            "SickLeaveHours" => "required|numeric|gt:0"
        ]);

        $employee = Employee::findOrFail($BusinessEntityID);
        $employee->setNationalIDNumber($request->input('NationalIDNumber'));
        $employee->setLoginID($request->input('LoginID'));
        $employee->setOrganizationNode($request->input('OrganizationNode'));
        $employee->setOrganizationLevel($request->input('OrganizationLevel'));
        $employee->setJobTitle($request->input('JobTitle'));
        $employee->setBirthDate($request->input('BirthDate'));
        $employee->setMaritalStatus($request->input('MaritalStatus'));
        $employee->setGender($request->input('Gender'));
        $employee->setHireDate($request->input('HireDate'));
        $employee->setVacationHours($request->input('VacationHours'));
        $employee->setSickLeaveHours($request->input('SickLeaveHours'));
        $employee->setModifiedDate(Carbon::now());

        $employee->save();
        return redirect()->route('admin.employee.index')->with("success", "Updated Successfully");
    }
    public function delete($BusinessEntityID)
    {
        $employee = Employee::where(column: 'BusinessEntityID', operator: $BusinessEntityID)->firstOrFail();
        $employee->delete();

        // $employee = Employee::where(column: 'BusinessEntityID', operator: $BusinessEntityID)-> delete();
        return redirect()->route('admin.employee.index')->with('success', 'Employee removed successfully');
    }
}
