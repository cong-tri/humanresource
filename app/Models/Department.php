<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = "department";

    protected $fillable = [
        'DepartmentID',
        'Name',
        'GroupName',
        'ModifiedDate'
    ];
    protected $primaryKey = "DepartmentID";
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public function employeeHistories()
    {
        return $this->hasMany(EmployeeDepartmentHistory::class, 'DepartmentID', 'DepartmentID');
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'BusinessEntityID', 'BusinessEntityID');
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
    public function getName(): mixed
    {
        return $this
            ->attributes['Name'];
    }
    public function setName($name): void
    {
        $this
            ->attributes['Name'] = $name;
    }
    public function getGroupName(): mixed
    {
        return $this
            ->attributes['GroupName'];
    }
    public function setGroupName($groupName): void
    {
        $this
            ->attributes['GroupName'] = $groupName;
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