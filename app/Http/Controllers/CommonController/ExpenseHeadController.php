<?php

namespace App\Http\Controllers\CommonController;

use App\Http\Controllers\Controller;
use App\Models\ExpenseHead;
use Illuminate\Http\Request;

class ExpenseHeadController extends Controller
{
    function rec($id){
        $data=ExpenseHead::whereParent($id)->get();
        $exData=[];
        foreach($data as $parent){
          $singleItem=['id'=>$parent->id,'name'=>$parent->name];
          $childs=ExpenseHead::whereParent($parent->id)->count();
          if($childs > 0){
                $singleItem['child']=$this->rec($parent->id);
            }
          $exData[]=$singleItem;
        }
        return $exData;
       /*  $data=ExpenseHead::all();
        return $data; */
    }
    
    public function index(){
        return $this->rec(0);
    }
    public function create(Request $request){
             $data= new ExpenseHead;
             $data->name=$request->name;
             $data->parent=intval($request->parent);
             $data->type=intval($request->type);
             $data->save();
             return response()->json();
}
}
