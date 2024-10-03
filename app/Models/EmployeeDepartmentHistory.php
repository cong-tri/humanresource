<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDepartmentHistory extends Model
{
    use HasFactory;
    protected $table = "employeedepartmenthistory";
    public function department()
    {
        return $this->belongsTo(Department::class, "DepartmentID");
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class, "BusinessEntityID");
    }
    public function shift()
    {
        return $this->belongsTo(Shift::class, "ShiftID");
    }
    public function getBusinessEntityID(): mixed
    {
        return $this
            ->attributes['BusinessEntityID'];
    }
    public function setBusinessEntityID($businessEntityID): void
    {
        $this
            ->attributes['BusinessEntityID'] = $businessEntityID;
    }
    public function getDepartmentID(): mixed
    {
        return $this
            ->attributes['DepartmentID'];
    }
    public function setDepartmentID($departmentID): void
    {
        $this
            ->attributes['DepartmentID'] = $departmentID;
    }
    public function getShiftID(): mixed
    {
        return $this
            ->attributes['ShiftID'];
    }
    public function setShiftID($shiftID): void
    {
        $this
            ->attributes['ShiftID'] = $shiftID;
    }
    public function getStartDate(): mixed
    {
        return $this
            ->attributes['StartDate'];
    }
    public function setStartDate($startDate): void
    {
        $this
            ->attributes['StartDate'] = $startDate;
    }
    public function getEndDate(): mixed
    {
        return $this
            ->attributes['EndDate'];
    }
    public function setEndDate($endDate): void
    {
        $this
            ->attributes['EndDate'] = $endDate;
    }
    public function getModifiedDate(): mixed
    {
        return $this
            ->attributes['ModifiedDate'];
    }
    public function setModifiedDate($modifiedDate): void
    {
        $this
            ->attributes['ModifiedDate'] = $modifiedDate;
    }
}