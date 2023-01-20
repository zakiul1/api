<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\CommonController\AccountController;
use App\Http\Controllers\CommonController\CompanyController;
use App\Http\Controllers\CommonController\EmployeeController;
use App\Http\Controllers\CommonController\ExpenseHeadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

   
});
Route::post('/login',[AuthController::class,'login']);
Route::post('/signup',[AuthController::class,'signup']);
Route::get('/company',[CompanyController::class,'index']);
Route::get('/employee',[EmployeeController::class,'index']);
Route::get('/account',[AccountController::class,'index']);
Route::get('/expense-head',[ExpenseHeadController::class,'index']);
Route::post('/post-expense-head',[ExpenseHeadController::class,'create']);
