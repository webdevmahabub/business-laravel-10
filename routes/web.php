<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeSliderController;

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
    return view('frontend.index');
});


///// Admin Routes
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout/', 'AdminLogOut')->name('admin.logout');
    Route::get('/admin/profile/', 'AdminProfile')->name('admin.profile');
    Route::get('/admin/profile/edit', 'AdminProfileEdit')->name('edit.profile');
    Route::post('/admin/profile/update', 'AdminProfileUpdate')->name('store.profile');
    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');


});


///// Admin Routes
Route::controller(HomeSliderController::class)->group(function () {
    Route::get('/all/slider/', 'AllSlider')->name('all.slider');
    Route::post('/update/slider', 'UpdateSlider')->name('update.slider');
    Route::get('/slider/user', 'SliderUsers')->name('slider.users');

   

});






Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
