<?php
namespace App\Http\Controllers\Admin;
use App\Models\EmployeeDepartmentHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminReportController extends Controller
{
    public function employeeReport()
    {
        $employeeReports = DB::table('employeedepartmenthistory')
            ->join('department', 'employeedepartmenthistory.DepartmentID', '=', 'department.DepartmentID')
            ->select('department.Name as DepartmentName', DB::raw('COUNT(employeedepartmenthistory.BusinessEntityID) as EmployeeCount'))
            ->groupBy('department.Name')
            ->get();

        // // Thay đổi sau cho phù hợp với dữ liệu nhân viên
        // $employeeName = 'Nguyễn Văn A';
        // $loginId = 'nvA123';
        // $birthday = '1990-01-01';
        $viewData = [];
        $viewData['title'] = "Report Admin";

        return view('admin.report.employee', compact('employeeReports'))->with("viewData", $viewData);
    }

    public function shiftReport()
    {
        $shiftReports = DB::table('employeedepartmenthistory')
            ->join('shift', 'employeedepartmenthistory.ShiftID', '=', 'shift.ShiftID')
            ->select('shift.Name as ShiftName', DB::raw('COUNT(employeedepartmenthistory.BusinessEntityID) as EmployeeCount'))
            ->groupBy('shift.Name')
            ->get();

        // Thay đổi sau cho phù hợp với dữ liệu nhân viên
        // $employeeName = 'Nguyễn Văn A';
        // $loginId = 'nvA123';
        // $birthday = '1990-01-01';
        $viewData = [];
        $viewData['title'] = "Report Admin";

        return view('admin.report.shift', compact('shiftReports'))->with("viewData", $viewData);
    }
}