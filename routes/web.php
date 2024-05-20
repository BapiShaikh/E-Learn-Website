<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\SignupController;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\ChatbotController;


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

Route::get('/home',[HomeController::class,'index']);
Route::get('/guide',[CourseController::class,'guide_index']);
Route::get('/interactive',[CourseController::class,'interactive_index']);
Route::get('/real',[CourseController::class,'real_index']);

Route::get('/about',[AboutController::class,'index']);

Route::get('/signup',[SignupController::class,'index']);
Route::get('/course',[CourseController::class,'index']);
Route::post('/submit',[SignupController::class,'submit_data']);
Route::get('/display',[SignupController::class,'display_data']);
Route::get('/login',[LoginController::class,'index']);
Route::post('/login_user',[LoginController::class,'login_data']);

Route::get('/contact',[ContactController::class,'index']);
Route::post('/contactus',[ContactController::class,'contact_data']);

Route::get("/edit{ep}",[SignupController::class,"data_edit"]);
Route::post("/update",[SignupController::class,"data_update"]);

Route::get("/delete{del}",[SignupController::class,"data_delete"]);

Route::get("/logout",[SignupController::class,'logout']);
Route::get('/admindisplay',[LoginController::class,'admindisplay_data']);

Route::get('/chatbot',[ChatbotController::class,'index']);

