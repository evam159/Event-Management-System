<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view("auth.login");
});


Route::post("authenticate", [LoginController::class, "login"])->name("login");

 Route::resource('tasks', TaskController::class);
 Route::resource('projects', ProjectsController::class);
 Route::resource('history', HistoryController::class);
 Route::resource('reports', ReportController::class);
 Route::resource('dashboard', DashboardController::class);




