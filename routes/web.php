<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TblUserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [TblUserController::class, 'showUsers']);
Route::get('/import-user', [TblUserController::class, 'importUser']);
Route::get('/export-user', [TblUserController::class, 'exportUsers']);
Route::get('/show-users', [TblUserController::class, 'showUsers']);
Route::get('/edit-user/{id}', [TblUserController::class, 'editUser']);
Route::post('/update-user', [TblUserController::class, 'updateUser']);