<?php

namespace App\Http\Controllers\Admin;

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
        $viewData["shift"] = Shift::all();
        return view(view: 'admin.shift.index')->with(key: "viewData", value: $viewData);
    }
}
