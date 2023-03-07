<?php

use App\Http\Controllers\FinanceController;
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

Route::GET('/', [FinanceController::class, 'index']);
Route::GET('/finance/create', [FinanceController::class, 'create']);
Route::POST('/finance/store', [FinanceController::class, 'store']);
Route::GET('/finance/{finance:slug}/edit', [FinanceController::class, 'edit']);
Route::patch('/finance/{finance:slug}/edit', [FinanceController::class, 'update']);
Route::delete('/finance/{finance:slug}/delete', [FinanceController::class, 'destroy']);
