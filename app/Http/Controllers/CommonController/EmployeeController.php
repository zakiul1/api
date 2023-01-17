<?php

namespace App\Http\Controllers\CommonController;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){

        $data= Employee::all();
        return $data;
    }
}
