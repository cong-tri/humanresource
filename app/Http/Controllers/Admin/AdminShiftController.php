<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Shift;
use Illuminate\Http\Request;

class AdminShiftController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Shift - Human Resource";
        $viewData["shifts"] = Shift::all();
        return view(view: 'admin.shift.index')->with(key: "viewData", value: $viewData);
    }
    public function store(Request $request)
    {
        $request->validate(rules: [
            'Name' => 'required|string|max:255',
            'StartTime' => 'required|date_format:H:i',
            'EndTime' => 'required|date_format:H:i|after:start_time',
        ]);

        Shift::create($request->all());
        return back();
    }

    public function edit($ShiftID)
    {
        $viewData = [];
        $viewData['title'] = 'Admin Page - Edit Shift - Human Resource';
        $shift = Shift::findOrFail(id: $ShiftID);
        return view(view: 'admin.shift.edit', data: compact(var_name: 'shift'))->with(key: "viewData", value: $viewData);
    }

    public function update(Request $request, $ShiftID)
    {
        $request->validate(rules: [
            'Name' => 'required|string|max:255',
            'StartTime' => 'required|date_format:H:i',
            'EndTime' => 'required|date_format:H:i|after:start_time',
        ]);
        $shift = Shift::findOrFail($ShiftID);

        $shift->setName($request->input('Name'));
        $shift->setStartTime($request->input('StartTime'));
        $shift->setEndTime($request->input('EndTime'));
        $shift->setModifiedDate(Carbon::now());
        $shift->save();
        return redirect()->route('admin.shift.index')->with("success", "Updated Successfully");
    }
    public function delete($ShiftID)
    {
        $shift = Shift::where(column: 'ShiftID', operator: $ShiftID)->firstOrFail();
        $shift->delete();

        return redirect()->route('admin.shift.index')->with('success', 'shift removed successfully');
    }
}
