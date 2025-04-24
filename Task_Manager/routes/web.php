<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [TaskController::class, 'index'])->name('index');

Route::get('/create', [TaskController::class, 'create']);

Route::post('/store', [TaskController::class, 'store'])->name('store');

Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');


