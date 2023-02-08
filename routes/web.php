<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

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
Route::get('/todo', function () {
    return view('todos.index');
});
Route::get('/todos', [TodosController::class, 'show'])->name('todos');
Route::get('/todos/delete/{id}', [TodosController::class, 'destroy']);
Route::get('/todos/view/{id}', [TodosController::class, 'view']);
Route::get('/todos/marking/{id}', [TodosController::class, 'marking']);
Route::get('/todos/create', [TodosController::class, 'create']);
Route::post('/store-todos', [TodosController::class, 'store']);
Route::post('/store-todos/{id}', [TodosController::class, 'update']);

Route::get('/todos/edit/{id}', [TodosController::class, 'edit']);
