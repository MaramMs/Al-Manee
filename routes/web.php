<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ExamplesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IamgesController;
use App\Http\Controllers\ServicesContoller;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UsersContoller;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/home', function () {
    // return Inertia::render('Home');
})->middleware(['auth', 'verified'])->name('home');

require __DIR__.'/auth.php';


// Route::resource('home', HomeController::class);


Route::group(['middleware' => 'auth'], function() {
    Route::get('/changePassword',[SettingController::class, 'showChangePasswordGet'])->name('changePasswordGet');
    Route::post('/changePassword',[SettingController::class, 'changePasswordPost'])->name('changePasswordPost');
    Route::resource('services', ServicesContoller::class);
    Route::resource('examples', ExamplesController::class);
    Route::resource('settings',SettingsController::class);
    Route::resource('images', IamgesController::class);
    Route::resource('contacts',ContactsController::class);
});
Route::get('/',[UsersContoller::class,'index'])->name('index');
Route::get('service',[UsersContoller::class,'service'])->name('service');
Route::get('service/{id}',[UsersContoller::class,'show'])->name('show');
Route::get('about',[UsersContoller::class,'about'])->name('about');
Route::get('contact',[UsersContoller::class,'getContact'])->name('contact-get');
Route::post('contact',[UsersContoller::class,'postContact'])->name('contact-post');
Route::get('search',[UsersContoller::class,'search'])->name('search');


Auth::routes(['register',false]);



Route::get('/home', [HomeController::class, 'index'])->name('home');




