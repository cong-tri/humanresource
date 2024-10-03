@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="row g-0">
        <div class="col card mx-3">
            <div class="card-header">
                <h2>Department Information</h2>
            </div>
            <div class="card-body">
                <x-input-field id="DepartmentID" name="DepartmentID" type="number" classnameDiv="row row-cols-2 mb-4 g-0"
                    classnameInput="col form-control" label="DepartmentID" classnameLabel="col form-label " readonly="true"
                    value="{{ $viewData['department']->getDepartmentID() }}" />
                <x-input-field id="name" name="name" type="text" classnameDiv="row row-cols-2 mb-4 g-0"
                    classnameInput="col form-control" label="Name" classnameLabel="col form-label" readonly="true"
                    value="{{ $viewData['department']->getName() }}" />
                <x-input-field id="GroupName" name="GroupName" type="text" classnameDiv="row row-cols-2 mb-4 g-0"
                    classnameInput="col form-control" label="Group Name" classnameLabel="col form-label" readonly="true"
                    value="{{ $viewData['department']->getGroupName() }}" />
                <x-input-field id="ModifiedDate" name="ModifiedDate" type="datetime-local"
                    classnameDiv="row row-cols-2 mb-4 g-0" classnameInput="col form-control" label="ModifiedDate"
                    classnameLabel="col form-label" readonly="true"
                    value="{{ $viewData['department']->getModifiedDate() }}" />
            </div>
        </div>

        <!-- Danh sách nhân viên -->
        <div class="col card mx-3">
            <div class="card-header">
                <h2>Employees in Department</h2>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Job Title</th>
                            <th>Hire Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($viewData['employees'] as $history)
                            <tr>

                                <td>{{ $history->employee->BusinessEntityID }}</td>
                                <td>{{ $history->employee->Name }}</td>
                                <td>{{ $history->employee->JobTitle }}</td>
                                <td>{{ $history->employee->HireDate }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
