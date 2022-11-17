<?php

use App\Http\Controllers\backend\BackendViewController;
use App\Http\Controllers\frontend\ViewController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('frontend.page.home');
});

Route::get('/dashboard', function () {
    return view('admin.page.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// === Front View Controller ======================

Route::get('/home',[ViewController::class,'HomeView'])->name('home');
Route::get('/program/one',[ViewController::class,'ProgramOne'])->name('program.one');
Route::get('/program/two',[ViewController::class,'Programtwo'])->name('program.two');
Route::get('/program/three',[ViewController::class,'Programthree'])->name('program.three');
Route::get('/program/module',[ViewController::class,'TestModul'])->name('test.modul');

// ====== Backend View Controllar start ================

Route::get('/admin',[BackendViewController::class,'LoginPage'])->name('login.page');
Route::get('/sider/add',[BackendViewController::class,'SliderView'])->name('slider.view');