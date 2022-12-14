<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ToDoListController;

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

//Route::get('/', [ItemController::class, 'index']);

//Route::get('/create', [ItemController::class, 'create']);
//Route::get('edit', [ItemController::class, 'edit']);
Route::get('/', [ToDoListController::class, 'index']);
Route::get('index', [ToDoListController::class, 'index']);
Route::get('create', [ToDoListController::class, 'create']);

Route::resource('lists', ToDoListController::class);
Route::resource('items', ItemController::class);

