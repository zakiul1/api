<?php

namespace App\Http\Controllers\CommonController;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $data=Company::all();
        return $data;
    }
}
