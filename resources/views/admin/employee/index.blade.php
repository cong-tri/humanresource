@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="card w-auto">
        <div class="card-header">
            <div class="hstack gap-3">
                <div>
                    <h3>List Employees</h3>
                </div>
                <div class="ms-auto">
                    <button class="btn btn-lg btn-outline-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#formModalEmployee">Create new employee</button>
                    <x-form-add />
                </div>
            </div>
            <div class="mt-4">
                <form action="{{ route('admin.employee.index') }}" method="GET">
                    @csrf
                    <x-input-field id="txtSearch" name="txtSearch" type="number" classnameDiv="row g-0"
                        classnameInput="col form-control" label="Search" classnameLabel="col-3 form-label" />
                    <div class="my-3">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive w-auto overflow-auto" style="height: 500px">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">ID</th>
                            <th scope="col">National ID</th>
                            <th scope="col">Login ID</th>
                            <th scope="col">Job</th>
                            <th scope="col">BirthDate</th>
                            <th scope="col">Gender</th>
                            <th scope="col" colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->getBusinessEntityID() }}</td>
                                <td>{{ $employee->getNationalIDNumber() }}</td>
                                <td>{{ $employee->getLoginID() }}</td>
                                <td>{{ $employee->getJobTitle() }}</td>
                                <td>{{ $employee->getBirthDate() }}</td>
                                <td>{{ $employee->getGender() }}</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-success">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a class="btn btn-primary" href="">
                                        <i class="bi-pencil"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.employee.delete', $employee->getBusinessEntityID()) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">
                                            <i class="bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
