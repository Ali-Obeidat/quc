<?php

use App\Http\Controllers\QucController;
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
    return view('welcome');
});

Auth::routes();
Route::get('/quc/step1', [QucController::class, 'Step1']);
Route::post('/quc/create-step1', [QucController::class, 'createStep1']);
Route::get('/quc/step2', [QucController::class, 'Step2']);
Route::post('/quc/create-step2', [QucController::class, 'CreateStep2']);
Route::get('/quc/step3', [QucController::class, 'Step3']);
Route::post('/quc/create-step3', [QucController::class, 'CreateStep3']);
Route::get('/quc/step4', [QucController::class, 'Step4']);
Route::post('/quc/create-step4', [QucController::class, 'CreateStep4']);
Route::get('/quc/step5', [QucController::class, 'Step5']);
Route::post('/quc/create-step5', [QucController::class, 'CreateStep5']);
Route::get('/quc/Student', [QucController::class, 'Student']);
Route::post('/quc/create-Student', [QucController::class, 'CreateStudent']);
Route::get('/quc/EmploymentStatus', [QucController::class, 'EmploymentStatus']);
Route::post('/quc/create-EmploymentStatus', [QucController::class, 'CreateEmploymentStatus']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
