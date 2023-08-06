<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('welcome');
    // mainPageFolder.mainPage
});

Route::get('/aboutUs', function () {
    return view('aboutUs.aboutUs');
});

Route::get('/contactUs', function () {
    return view('contactUs.contactUs');
});

Route::get('/ourServeices', function () {
    return view('ourServeices.ourServeices');
});

Route::get('/ourProjects', function () {
    return view('ourProjects.ourProjects');
});
require __DIR__.'/auth.php';
