<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get("/", [AuthController::class, 'index']);
Route::post("/login", [AuthController::class, 'auth']);
Route::get("/dashboard", [DashboardController::class, 'index']);
Route::get('/register', [AuthController::class, 'registerIndex']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/dashboard/employee', [DashboardController::class, 'dataEmployee']);

Route::post('/formulir/add-data', [DashboardController::class, 'addBiodata']);
