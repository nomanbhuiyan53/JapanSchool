<?php

use App\Http\Controllers\AllInfoController;
use App\Http\Controllers\backend\BackendViewController;
use App\Http\Controllers\frontend\ViewController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Models\Slider;
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
Route::prefix('slider')->group(function(){
    Route::get('/add',[BackendViewController::class,'SliderView'])->name('slider.view');
    // ==== slider route ===
    Route::post('/insart',[BackendViewController::class,'SliderAdd'])->name('slider.add');
});

//========= all information ================
Route::prefix('alldata')->group(function(){

});
Route::get('/alldata/view',[BackendViewController::class,'AlldataView'])->name('all.data');
Route::get('/alldata/add',[BackendViewController::class,'AlldataAdd'])->name('alldata.add');
Route::post('/alldata/insart',[BackendViewController::class,'InfoAdd'])->name('info.add');
Route::get('/alldata/edit/{id}',[AllInfoController::class,'InfoEditView'])->name('info.edit');

Route::get('/delete/{id}',[AllInfoController::class,'InfoDelete'])->name('info.delete');
Route::post('/update/{id}',[AllInfoController::class,'InfoUpdate'])->name('info.update');
//=========== end info =====================

//============== Gallery Route start ===========================

Route::prefix('gallery')->group(function(){
    Route::get('/view',[GalleryController::class,'GalleyView'])->name('gallery.view');
    Route::get('/add/view',[GalleryController::class,'GalleryAddView'])->name('gallery.add');
    Route::post('/upload',[GalleryController::class,'GalleryUpload'])->name('gallery.upload');
    Route::get('/image/add',[GalleryController::class,'GalleryImageAdd'])->name('gallery.image');
    Route::post('/image/upload',[GalleryController::class,'ImageUpload'])->name('image.upload');
});