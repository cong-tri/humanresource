<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminEmployeeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Employee - Human Resource";
        $employees = Employee::paginate(10);
        return view(view: 'admin.employee.index', data: compact('employees'))->with(key: "viewData", value: $viewData);
    }
    public function store(Request $request)
    {
        $request->validate(rules: [
            "NationalIDNumber" => "required|max:255",
            "LoginID" => "required|max:255",
            "OrganizationNode" => "required|max:255",
            "OrganizationLevel" => "required|numeric|gt:0",
            "JobTitle" => "required|max:255",
            "BirthDate" => "required|date",
            "MaritalStatus" => "required|max:255",
            "Gender" => "required|max:2",
            "HireDate" => "required|date",
            // "VacationHours" => "required|numeric|gt:0",
            // "SickLeaveHours" => "required|numeric|gt:0",
            // "ModifiedDate" => "required|date",
        ]);

        // $newProduct = new Employee();
        // $newProduct->setNationalIDNumber(NationalIDNumber: $request->input(key: 'NationalIDNumber'));
        // $newProduct->setLoginID(LoginID: $request->input(key: 'LoginID'));
        // $newProduct->setOrganizationNode(OrganizationNode: $request->input(key: 'OrganizationNode'));
        // $newProduct->setOrganizationLevel(OrganizationLevel: $request->input(key: 'OrganizationLevel'));
        // $newProduct->setJobTitle(JobTitle: $request->input(key: 'JobTitle'));
        // $newProduct->setBirthDate(BirthDate: $request->input(key: 'BirthDate'));
        // $newProduct->setMaritalStatus(MaritalStatus: $request->input(key: 'MaritalStatus'));
        // $newProduct->setGender(Gender: $request->input(key: 'Gender'));
        // $newProduct->setHireDate(HireDate: $request->input(key: 'HireDate'));
        // $newProduct->setVacationHours(VacationHours: $request->input(key: 'VacationHours'));
        // $newProduct->setSickLeaveHours(SickLeaveHours: $request->input(key: 'SickLeaveHours'));
        // $newProduct->setModifiedDate(ModifiedDate: $request->input(key: 'ModifiedDate'));

        // $newProduct->save();
        // $creationData = $request->only(['NationalIDNumber', 'LoginID', 'OrganizationNode', 'OrganizationLevel', 'JobTitle', 'BirthDate', 'MaritalStatus', 'Gender', 'HireDate']);
        Employee::create($request->all());

        // Product::create($creationData);
        return back();
    }
}
