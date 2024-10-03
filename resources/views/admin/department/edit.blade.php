@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Edit Product
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
                action="{{ route('admin.department.update', ['DepartmentID' => $department->getDepartmentID()]) }}">
                @csrf
                @method('PUT')
                <div class="row row-cols-3">
                    <x-input-field id="DepartmentID" name="DepartmentID" type="number" classnameDiv="col mb-3"
                        classnameInput="form-control" label="DepartmentID" classnameLabel="form-label" readonly="true"
                        value="{{ $department->getDepartmentID() }}" />
                    <x-input-field id="name" name="Name" type="text" classnameDiv="col mb-3"
                        classnameInput="form-control" label="Name" classnameLabel="form-label"
                        value="{{ $department->getName() }}" />
                    <x-input-field id="GroupName" name="GroupName" type="text" classnameDiv="col mb-3"
                        classnameInput="form-control" label="Group Name" classnameLabel="form-label"
                        value="{{ $department->getGroupName() }}" />
                    <x-input-field id="ModifiedDate" name="ModifiedDate" type="datetime-local" classnameDiv="col mb-3"
                        classnameInput="form-control" label="ModifiedDate" classnameLabel="form-label"
                        value="{{ $department->getModifiedDate() }}" />
                </div>
                <button type="submit" class="btn btn-primary btn-lg w-100">Edit</button>
            </form>
        </div>
    </div>
@endsection
