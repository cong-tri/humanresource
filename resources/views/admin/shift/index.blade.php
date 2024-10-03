@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="card w-auto">
        <div class="card-header">
            <div class="hstack gap-3">
                <div>
                    <h3>List Shifts</h3>
                </div>
                <div class="ms-auto">
                    <button class="btn btn-lg btn-outline-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#formModalShift">Create new shift</button>
                    <x-form-add-shift />
                </div>
            </div>
        </div>
        <div class="card-body">
        </div>

        <div class="card-body">
            <div class="table-responsive w-auto">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">StartTime</th>
                            <th scope="col">EndTime</th>
                            <th scope="col" colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($viewData['shifts'] as $shift)
                            <tr>
                                <td>{{ $shift->getShiftID() }}</td>
                                <td>{{ $shift->getName() }}</td>
                                <td>{{ $shift->getStartTime() }}</td>
                                <td>{{ $shift->getEndTime() }}</td>
                                <td class="text-center">
                                    {{-- <a href="{{ route('admin.shift.show', ['ShiftID' => $shift->getShiftID()]) }}"
                                        class="btn btn-success">
                                        <i class="bi bi-eye"></i>
                                    </a> --}}
                                    <a class="btn btn-primary"
                                        href="{{ route('admin.shift.edit', ['ShiftID' => $shift->getShiftID()]) }}">
                                        <i class="bi-pencil"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.shift.delete', $shift->getShiftID()) }}" method="POST">
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
