<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\IssueController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('projects', ProjectController::class);
Route::resource('issues', IssueController::class);