<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\PortoTypeController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\SpecialServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.index');
// });


Route::get('/', [FrontEndController::class, 'home']);
Route::get('/list-blog', [FrontEndController::class, 'blog']);
Route::get('/blog/{slug}', [FrontEndController::class, 'detailblog']);
Route::get('/special-service/{slug}', [FrontEndController::class, 'detailspecialservice']);
Route::get('/porto/{slug}', [FrontEndController::class, 'detailporto']);

Route::get('/auth/login', [LoginController::class, 'login']);
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::middleware(['admin', 'auth:web'])->prefix('/admin')->group(function (){
    Route::get('/dashboard', function () {return view('admin.dashboard');});
    Route::resource('blogs', BlogController::class);
    Route::resource('portofolio', PortofolioController::class);
    Route::resource('special-service', SpecialServiceController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('porto-type', PortoTypeController::class);
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
