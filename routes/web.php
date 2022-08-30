<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Categories;
use App\Http\Controllers\Admin\ProjectController;


Route::get('/', [App\Http\Controllers\Site\ProjectController::class, 'index']);
Route::post('/', [App\Http\Controllers\Site\MainController::class, 'message'])
    ->name('message');

// PROJECTS
Route::get('/freelance-camp', [App\Http\Controllers\Site\ProjectController::class, 'freelanceCamp'])
    ->name('freelance-camp');

// creative agency
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

Route::get('/velocity', [App\Http\Controllers\Site\ProjectController::class, 'velocity'])
    ->name('velocity');

Route::get('/calm', [App\Http\Controllers\Site\ProjectController::class, 'calm'])
    ->name('calm');

Route::get('/contractor-x', [App\Http\Controllers\Site\ProjectController::class, 'contractorX'])
    ->name('contractor-x');

Route::get('/data-rar', [App\Http\Controllers\Site\ProjectController::class, 'dataRar'])
    ->name('data-rar');

// personal blog
Route::get('/personal-blog', [App\Http\Controllers\Site\Projects\Project11\ProjectController::class, 'personalBlog'])
    ->name('personal-blog');
Route::get('/personal-blog/about', [App\Http\Controllers\Site\Projects\Project11\ProjectController::class, 'personalBlogAbout'])
    ->name('personalblog-about');
Route::get('/personal-blog/{id}', [App\Http\Controllers\Site\Projects\Project11\ProjectController::class, 'personalBlogPost'])
    ->name('personalblog-onepost');
Route::get('/personal-blog/category/{id}', [App\Http\Controllers\Site\Projects\Project11\ProjectController::class, 'personalBlogCategory'])
    ->name('personalblog-category');
Route::get('/personal-blog/{$search}', [App\Http\Controllers\Site\Projects\Project11\ProjectController::class, 'personalBlogSearch'])
    ->name('personalblog-search');
Route::post('/personal-blog/add-post', [App\Http\Controllers\Site\Projects\Project11\ProjectController::class, 'personalBlogStore'])
    ->name('personalblog-addpost');
Route::post('/personal-blog/add-comment', [App\Http\Controllers\Site\Projects\Project11\ProjectController::class, 'personalBlogStore'])
    ->name('personalblog-addcomment');

// Route::get('/personal-blog/works', [App\Http\Controllers\Site\Projects\Project11Controller::class, 'personalBlogWorks'])
//     ->name('personalblog-works');
Route::get('/personal-blog/works/{id}', [App\Http\Controllers\Site\Projects\Project11\ProjectController::class, 'personalBlogOneWork'])
    ->name('personalblog-onework');

Route::get('/personal-blog/dashboard/profile', [App\Http\Controllers\Site\Projects\Project11\Auth\ProfileController::class, 'personalBlogProfile'])
    ->name('personalblog-profile');
// Route::get('/personal-blog/login', [App\Http\Controllers\Site\Projects\Project11\Auth\AuthController::class, 'personalBlogLogin'])
//     ->name('personalblog-login');
// Route::get('/personal-blog/registration', [App\Http\Controllers\Site\Projects\Project11\Auth\AuthController::class, 'personalBlogRegistration'])
//     ->name('personalblog-registration');
Route::resource('/personal-blog/dashboard/posts', App\Http\Controllers\Site\Projects\Project11\Posts\PostController::class)
    ->names('personalblog-posts');
Route::resource('/personal-blog/dashboard/categories', App\Http\Controllers\Site\Projects\Project11\Posts\CatController::class)
    ->names('personalblog-cats');

// organic
Route::get('/organic', [App\Http\Controllers\Site\Projects\Project8\OrganicController::class, 'index'])
    ->name('organic');
Route::get('/organic/reviews', [App\Http\Controllers\Site\Projects\Project8\OrganicController::class, 'organicReviews'])
    ->name('organic-reviews');
Route::get('/organic/about', [App\Http\Controllers\Site\Projects\Project8\OrganicController::class, 'organicAbout'])
    ->name('organic-about');
Route::get('/organic/products', [App\Http\Controllers\Site\Projects\Project8\OrganicController::class, 'organicProducts'])
    ->name('organic-products');
Route::get('/organic/contacts', [App\Http\Controllers\Site\Projects\Project8\OrganicController::class, 'organicContacts'])
    ->name('organic-contacts');

// ELEMENTS
Route::get('/flex-box', [App\Http\Controllers\Site\ProjectController::class, 'flexBox'])
    ->name('flex-box');

Route::get('/menu-burger', [App\Http\Controllers\Site\ProjectController::class, 'menuBurger'])
    ->name('menu-burger');

Route::get('/sliders', [App\Http\Controllers\Site\ProjectController::class, 'sliders'])
    ->name('sliders');

Route::get('/grid-layout', [App\Http\Controllers\Site\ProjectController::class, 'gridLayout'])
    ->name('grid-layout');

Route::get('/position', [App\Http\Controllers\Site\ProjectController::class, 'position'])
    ->name('position');

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
