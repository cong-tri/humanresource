@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Lịch sử chuyển phòng nhân viên</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên phòng</th>
                    <th>Số lượng nhân viên</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employeeReports as $report)
                    <tr>
                        <td>{{ $report->DepartmentName }}</td>
                        <td>{{ $report->EmployeeCount }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
