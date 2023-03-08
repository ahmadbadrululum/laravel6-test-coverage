<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnualLeaveController;
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
Route::post('/annual-leaves', 'AnnualLeaveController@createAnnualLeave');
Route::Get('/annual-leaves', 'AnnualLeaveController@getAllAnnualLeaves');
Route::Get('/annual-leaves/{id}', 'AnnualLeaveController@getAnnualLeave');
