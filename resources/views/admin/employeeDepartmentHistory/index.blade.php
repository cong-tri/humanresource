@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="card w-auto">
        <div class="card-header">
            <h3>List Employee Department History</h3>
        </div>
        <div class="card-body">
        </div>

        <div class="card-body">
            <div class="table-responsive w-auto">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">BusinessEntityID </th>
                            <th scope="col">DepartmentID</th>
                            <th scope="col">ShiftID</th>
                            <th scope="col">StartDate</th>
                            <th scope="col">EndDate</th>
                            <th scope="col" colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employeedepartmenthistorys as $employeedepartmenthistory)
                            <tr>
                                <td>{{ $employeedepartmenthistory->getBusinessEntityID() }}</td>
                                <td>{{ $employeedepartmenthistory->getDepartmentID() }}</td>
                                <td>{{ $employeedepartmenthistory->getShiftID() }}</td>
                                <td>{{ $employeedepartmenthistory->getStartDate() }}</td>
                                <td>{{ $employeedepartmenthistory->getEndDate() }}</td>
                                <td>
                                    <a class="btn btn-primary" href="">
                                        <i class="bi-pencil"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="" method="POST">
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

                <div class="d-flex justify-content-center">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            @if ($employeedepartmenthistorys->onFirstPage())
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $employeedepartmenthistorys->previousPageUrl() }}"
                                        rel="prev">Previous</a>
                                </li>
                            @endif

                            @foreach ($employeedepartmenthistorys->links()->elements as $element)
                                @if (is_string($element))
                                    <li class="page-item disabled">
                                        <span class="page-link">{{ $element }}</span>
                                    </li>
                                @endif

                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        @if ($page == $employeedepartmenthistorys->currentPage())
                                            <li class="page-item active">
                                                <span class="page-link">{{ $page }}</span>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            @if ($employeedepartmenthistorys->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $employeedepartmenthistorys->nextPageUrl() }}"
                                        rel="next">Next</a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <span class="page-link">Next</span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
