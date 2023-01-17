<?php

namespace App\Http\Controllers\CommonController;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
     public function index(){

        $data= Account::all();
        return $data;
    }
}