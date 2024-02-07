<?php

use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\StudentController;
use App\Models\Announcements;
use App\Models\Skill;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::resource('companies',CompanyController::class);
Route::resource('announcements',AnnouncementsController::class);
Route::resource('skills',SkillController::class);
Route::resource('students',StudentController::class);
Route::resource('applications',ApplicationController::class);
Route::resource('statistics',StatisticController::class);
// Route::get('/applications/create/{announcement_id}', 'ApplicationController@create')->name('applications.create');
