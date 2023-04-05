<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HomeLogoController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

// Home page
// Route::get('/', [HomeController::class, 'index']);

// All pages
Route::get('/allServices', [HomeController::class, 'allServices']);
Route::get('/allProjects', [HomeController::class, 'allProjects']);
Route::get('/project-single/{p_id}', [HomeController::class, 'projectSingle']);
Route::get('/about-us', [HomeController::class, 'aboutUS']);
Route::get('/team', [HomeController::class, 'ourTeam']);
Route::get('/contact-us', [HomeController::class, 'contactUS']);

// Admin Login Details
Route::get('/login-admin', [AdminController::class, 'adminLogin'])->name('login');
Route::group(['middleware' => 'guard'], function () {
    Route::get('/admin', [AdminController::class, 'index']);
});
Route::post('admin/login-check', [AdminController::class, 'checkAdmin']);
Route::post('/logOut-admin', 'App\Http\Controllers\AdminController@logOut');

// Admin Details
Route::group(['prefix' => 'admin'], function () {
    Route::resource('authentication', AuthController::class);
    Route::resource('services', ServicesController::class);
    Route::resource('projects', ProjectsController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('team', TeamController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('logo', HomeLogoController::class);
    Route::resource('about', AboutController::class);
    Route::resource('contact', ContactController::class);
});
