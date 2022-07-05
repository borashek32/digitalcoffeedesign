<?php

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

Route::get('/', [App\Http\Controllers\Site\MainController::class, 'main']);
Route::get('/project_1', [App\Http\Controllers\Site\ProjectController::class, 'project1'])
    ->name('project1');

Route::get('/project_2', [App\Http\Controllers\Site\ProjectController::class, 'project2'])
    ->name('project2');
Route::get('/project_2/contact', [App\Http\Controllers\Site\ProjectController::class, 'project2_contact'])
    ->name('project2_contact');
Route::get('/project_2/servives', [App\Http\Controllers\Site\ProjectController::class, 'project2_services'])
    ->name('project2_services');
Route::get('/project_2/work', [App\Http\Controllers\Site\ProjectController::class, 'project2_work'])
    ->name('project2_work');

Route::get('/project_3', [App\Http\Controllers\Site\ProjectController::class, 'project3'])
    ->name('project3');

Route::get('/project_4', [App\Http\Controllers\Site\ProjectController::class, 'project4'])
    ->name('project4');

Route::get('/project_5', [App\Http\Controllers\Site\ProjectController::class, 'project5'])
    ->name('project5');

Route::get('/project_6', [App\Http\Controllers\Site\ProjectController::class, 'project6'])
    ->name('project6');

Route::get('/project_7', [App\Http\Controllers\Site\ProjectController::class, 'project7'])
    ->name('project7');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
