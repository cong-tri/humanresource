@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <h2 class="fw-bold">Edit Product</h2>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <!-- add form -->
            <form method="POST"
                action="{{ route('admin.employee.update', ['BusinessEntityID' => $employee->getBusinessEntityID()]) }}">
                @csrf
                @method('PUT')
                <div class="row row-cols-3">
                    <x-input-field id="BusinessEntityID" name="BusinessEntityID" type="number" classnameDiv="col mb-3"
                        classnameInput="form-control" label="BusinessEntityID" classnameLabel="form-label" readonly="true"
                        value="{{ $employee->getBusinessEntityID() }}" />
                    <x-input-field id="NationalIDNumber" name="NationalIDNumber" type="text" classnameDiv="col mb-3"
                        classnameInput="form-control" label="NationalIDNumber" classnameLabel="form-label"
                        value="{{ $employee->getNationalIDNumber() }}" />
                    <x-input-field id="LoginID" name="LoginID" type="text" classnameDiv="col mb-3"
                        classnameInput="form-control" label="LoginID" classnameLabel="form-label"
                        value="{{ $employee->getLoginID() }}" />
                    <x-input-field id="OrganizationNode" name="OrganizationNode" type="text" classnameDiv="col mb-3"
                        classnameInput="form-control" label="OrganizationNode" classnameLabel="form-label"
                        value="{{ $employee->getOrganizationNode() }}" />
                    <x-input-field id="OrganizationLevel" name="OrganizationLevel" type="number" classnameDiv="col mb-3"
                        classnameInput="form-control" label="OrganizationLevel" classnameLabel="form-label"
                        value="{{ $employee->getOrganizationLevel() }}" />
                    <x-input-field id="JobTitle" name="JobTitle" type="text" classnameDiv="col mb-3"
                        classnameInput="form-control" label="JobTitle" classnameLabel="form-label"
                        value="{{ $employee->getJobTitle() }}" />
                    <x-input-field id="BirthDate" name="BirthDate" type="date" classnameDiv="col mb-3"
                        classnameInput="form-control" label="BirthDate" classnameLabel="form-label"
                        value="{{ $employee->getBirthDate() }}" />
                    <x-input-field id="MaritalStatus" name="MaritalStatus" type="text" classnameDiv="col mb-3"
                        classnameInput="form-control" label="MaritalStatus" classnameLabel="form-label"
                        value="{{ $employee->getMaritalStatus() }}" />
                    <x-input-field id="Gender" name="Gender" type="text" classnameDiv="col mb-3"
                        classnameInput="form-control" label="Gender" classnameLabel="form-label"
                        value="{{ $employee->getGender() }}" />
                    <x-input-field id="HireDate" name="HireDate" type="date" classnameDiv="col mb-3"
                        classnameInput="form-control" label="HireDate" classnameLabel="form-label"
                        value="{{ $employee->getHireDate() }}" />
                    <x-input-field id="VacationHours" name="VacationHours" type="number" classnameDiv="col mb-3"
                        classnameInput="form-control" label="VacationHours" classnameLabel="form-label"
                        value="{{ $employee->getVacationHours() }}" />
                    <x-input-field id="SickLeaveHours" name="SickLeaveHours" type="number" classnameDiv="col mb-3"
                        classnameInput="form-control" label="SickLeaveHours" classnameLabel="form-label"
                        value="{{ $employee->getSickLeaveHours() }}" />
                    <x-input-field id="ModifiedDate" name="ModifiedDate" type="datetime-local" classnameDiv="col mb-3"
                        classnameInput="form-control" label="ModifiedDate" classnameLabel="form-label"
                        value="{{ $employee->getModifiedDate() }}" />
                </div>
                <button type="submit" class="btn btn-primary btn-lg w-100">Save Change</button>
            </form>
        </div>
    </div>
@endsection
