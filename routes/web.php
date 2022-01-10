<?php

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
Route::resource('services', ServicesContoller::class);
Route::resource('examples', ExamplesController::class);
Route::resource('settings',SettingsController::class);
Route::resource('images', IamgesController::class);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/changePassword',[SettingController::class, 'showChangePasswordGet'])->name('changePasswordGet');
    Route::post('/changePassword',[SettingController::class, 'changePasswordPost'])->name('changePasswordPost');
});

Route::get('about',[UsersContoller::class,'about']);
Route::get('contact',[UsersContoller::class,'contact']);
Route::get('service',[UsersContoller::class,'service']);
Route::get('index',[UsersContoller::class,'index']);

Auth::routes();



Route::get('/home', [HomeController::class, 'index'])->name('home');




