@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Lịch sử ca làm việc</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên ca</th>
                    <th>Số lượng nhân viên</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shiftReports as $report)
                    <tr>
                        <td>{{ $report->ShiftName }}</td>
                        <td>{{ $report->EmployeeCount }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
