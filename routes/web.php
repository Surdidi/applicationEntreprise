<?php

namespace App;

use App\Http\Controllers\ELementformationController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getParents/{idElementFormation}',[ELementformationController::class,'getParents']);

Route::post('/getParentsAjax/{idElementFormation}',[ELementformationController::class,'getParentsAjax']);

Route::get('/filAriane',[ELementformationController::class,'filAriane']);
