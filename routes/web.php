<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;

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

// Route for "About Me" page
Route::get('/about-me', [AboutMeController::class, 'showAboutMe']);

// Route for "Skills" page
Route::get('/skills', [SkillsController::class, 'showSkills']);

// Route for "Hobbies" page
Route::get('/hobbies', [HobbiesController::class, 'showHobbies']);
