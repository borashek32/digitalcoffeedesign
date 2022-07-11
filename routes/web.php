<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Categories;
use App\Http\Controllers\Admin\ProjectController;


Route::get('/', [App\Http\Controllers\Site\ProjectController::class, 'index']);
Route::post('/', [App\Http\Controllers\Site\MainController::class, 'message'])
    ->name('message')
    ->middleware('auth');

// PROJECTS
Route::get('/freelance-camp', [App\Http\Controllers\Site\ProjectController::class, 'freelanceCamp'])
    ->name('freelance-camp');

Route::get('/creative-agency', [App\Http\Controllers\Site\ProjectController::class, 'creativeAgency'])
    ->name('creative-agency');
Route::get('/creative-agency/contact', [App\Http\Controllers\Site\ProjectController::class, 'creativeAgencyContact'])
    ->name('creative-agency_contact');
Route::get('/creative-agency/servives', [App\Http\Controllers\Site\ProjectController::class, 'creativeAgencyServices'])
    ->name('creative-agency_services');
Route::get('/creative-agency/work', [App\Http\Controllers\Site\ProjectController::class, 'creativeAgencyWork'])
    ->name('creative-agency_work');

Route::get('/some-portfolio-site', [App\Http\Controllers\Site\ProjectController::class, 'somePortfolioSite'])
    ->name('some-portfolio-site');

Route::get('/choose-your-colors', [App\Http\Controllers\Site\ProjectController::class, 'chooseYourColors'])
    ->name('choose-your-colors');

Route::get('/relvise', [App\Http\Controllers\Site\ProjectController::class, 'relvise'])
    ->name('relvise');

Route::get('/go-corona', [App\Http\Controllers\Site\ProjectController::class, 'gocorona'])
    ->name('go-corona');

Route::get('/designer-portfolio-site', [App\Http\Controllers\Site\ProjectController::class, 'designerPortfolioSite'])
    ->name('designer-portfolio-site');


// ELEMENTS
Route::get('/flex-box', [App\Http\Controllers\Site\ProjectController::class, 'flexBox'])
    ->name('flex-box');

Route::get('/menu-burger', [App\Http\Controllers\Site\ProjectController::class, 'menuBurger'])
    ->name('menu-burger');

Route::get('/grid-layout', [App\Http\Controllers\Site\ProjectController::class, 'gridLayout'])
    ->name('grid-layout');

// AUTH
Route::group(['middleware' => ['role:admin']], function () {
    Route::prefix('admin')->group(function () {

        // ADMIN
        Route::get('/dashboard', function () { return view('dashboard'); })
            ->name('dashboard');
        Route::get('/categories', Categories::class)
            ->name('cats');
        Route::resource('/projects', ProjectController::class);
        Route::post('/projects/project_status', [ProjectController::class, 'updateStatus'])
            ->name('projects.status');
    });
});
