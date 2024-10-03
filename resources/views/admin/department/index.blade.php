@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="card w-auto">
        <div class="card-header">
            <div class="hstack gap-3">
                <div>
                    <h3>List Departments</h3>
                </div>
                <div class="ms-auto">
                    <button class="btn btn-lg btn-outline-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#formModalDepartment">Create new department</button>
                    <x-form-add-department />
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive w-auto">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">ID </th>
                            <th scope="col">Name</th>
                            <th scope="col">GroupName</th>
                            <th scope="col" colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                            <tr>
                                <td>{{ $department->getDepartmentID() }}</td>
                                <td>{{ $department->getName() }}</td>
                                <td>{{ $department->getGroupName() }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.department.show', ['DepartmentID' => $department->getDepartmentID()]) }}"
                                        class="btn btn-success">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a class="btn btn-primary"
                                        href="{{ route('admin.department.edit', ['DepartmentID' => $department->getDepartmentID()]) }}">
                                        <i class="bi-pencil"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.department.delete', $department->getDepartmentID()) }}"
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
