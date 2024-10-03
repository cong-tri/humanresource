@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <h2 class="fw-bold">Edit Shift</h2>
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
            <form method="POST" action="{{ route('admin.shift.update', ['ShiftID' => $shift->getShiftID()]) }}">
                @csrf
                @method('PUT')
                <div class="row row-cols-2 gb-3">
                    <x-input-field id="ShiftID" name="ShiftID" type="number" classnameDiv="col mb-3"
                        classnameInput="form-control" label="ShiftID" classnameLabel="form-label" readonly="true"
                        value="{{ $shift->getShiftID() }}" />
                    <x-input-field id="Name" name="Name" type="text" classnameDiv="col mb-3"
                        classnameInput="form-control" label="Name" classnameLabel="form-label"
                        value="{{ $shift->getName() }}" />
                    <x-input-field id="StartTime" name="StartTime" type="time" classnameDiv="col mb-3"
                        classnameInput="form-control" label="StartTime" classnameLabel="form-label"
                        value="{{ $shift->getStartTime() }}" />
                    <x-input-field id="EndTime" name="EndTime" type="time" classnameDiv="col mb-3"
                        classnameInput="form-control" label="EndTime" classnameLabel="form-label"
                        value="{{ $shift->getEndTime() }}" />
                </div>
                <button type="submit" class="btn btn-primary btn-lg w-100">Save Change</button>
            </form>
        </div>
    </div>
@endsection
