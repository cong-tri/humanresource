@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="card w-100">
        <div class="card-header">
            <h2>Employee Information</h2>
        </div>
        <div class="card-body">
            <x-input-field id="BusinessEntityID" name="BusinessEntityID" type="number" classnameDiv="row mb-4 g-0"
                classnameInput="col form-control" label="BusinessEntityID" classnameLabel="col form-label " readonly="true"
                value="{{ $employee->getBusinessEntityID() }}" />
            <x-input-field id="NationalIDNumber" name="NationalIDNumber" type="text" classnameDiv="row mb-4 g-0"
                classnameInput="col form-control" label="NationalIDNumber" classnameLabel="col form-label" readonly="true"
                value="{{ $employee->getNationalIDNumber() }}" />
            <x-input-field id="LoginID" name="LoginID" type="text" classnameDiv="row mb-4 g-0"
                classnameInput="col form-control" label="LoginID" classnameLabel="col form-label" readonly="true"
                value="{{ $employee->getLoginID() }}" />
            <x-input-field id="OrganizationNode" name="OrganizationNode" type="text" classnameDiv="row mb-4 g-0"
                classnameInput="col form-control" label="OrganizationNode" classnameLabel="col form-label" readonly="true"
                value="{{ $employee->getOrganizationNode() }}" />
            <x-input-field id="OrganizationLevel" name="OrganizationLevel" type="number" classnameDiv="row mb-4 g-0"
                classnameInput="col form-control" label="OrganizationLevel" classnameLabel="col form-label" readonly="true"
                value="{{ $employee->getOrganizationLevel() }}" />
            <x-input-field id="JobTitle" name="JobTitle" type="text" classnameDiv="row mb-4 g-0"
                classnameInput="col form-control" label="JobTitle" classnameLabel="col form-label" readonly="true"
                value="{{ $employee->getJobTitle() }}" />
            <x-input-field id="BirthDate" name="BirthDate" type="date" classnameDiv="row mb-4 g-0"
                classnameInput="col form-control" label="BirthDate" classnameLabel="col form-label" readonly="true"
                value="{{ $employee->getBirthDate() }}" />
            <x-input-field id="MaritalStatus" name="MaritalStatus" type="text" classnameDiv="row mb-4 g-0"
                classnameInput="col form-control" label="MaritalStatus" classnameLabel="col form-label" readonly="true"
                value="{{ $employee->getMaritalStatus() }}" />
            <x-input-field id="Gender" name="Gender" type="text" classnameDiv="row mb-4 g-0"
                classnameInput="col form-control" label="Gender" classnameLabel="col form-label" readonly="true"
                value="{{ $employee->getGender() }}" />
            <x-input-field id="HireDate" name="HireDate" type="date" classnameDiv="row mb-4 g-0"
                classnameInput="col form-control" label="HireDate" classnameLabel="col form-label" readonly="true"
                value="{{ $employee->getHireDate() }}" />
            <x-input-field id="VacationHours" name="VacationHours" type="number" classnameDiv="row mb-4 g-0"
                classnameInput="col form-control" label="VacationHours" classnameLabel="col form-label" readonly="true"
                value="{{ $employee->getVacationHours() }}" />
            <x-input-field id="SickLeaveHours" name="SickLeaveHours" type="number" classnameDiv="row mb-4 g-0"
                classnameInput="col form-control" label="SickLeaveHours" classnameLabel="col form-label" readonly="true"
                value="{{ $employee->getSickLeaveHours() }}" />
            <x-input-field id="ModifiedDate" name="ModifiedDate" type="datetime-local" classnameDiv="row mb-4 g-0"
                classnameInput="col form-control" label="ModifiedDate" classnameLabel="col form-label" readonly="true"
                value="{{ $employee->getModifiedDate() }}" />
        </div>
        <div class="card-footer">
            <h3>Department History</h3>
        </div>
    </div>
@endsection
