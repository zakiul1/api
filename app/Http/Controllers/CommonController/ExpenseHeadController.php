<?php

namespace App\Http\Controllers\CommonController;

use App\Http\Controllers\Controller;
use App\Models\ExpenseHead;
use Illuminate\Http\Request;

class ExpenseHeadController extends Controller
{
    public function index(){
        $data=ExpenseHead::all();
        return $data;
    }
    public function create(Request $request){
     // dd($request->all());
              $validatedData = $request->validate([

                'name' => 'required',
                'type' => 'required'

            ], [

                'name.required' => 'Name field is required.',

                'expenseHeadId.required' => 'Expense Head Must Be Select',


            ]);


             $head = ExpenseHead::create($validatedData);
             return response()->json();
}
}
