<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/test', function () {
    return view('test');
});

Route::get('students', [StudentController::class, 'index']);

// load create form
Route::get('students/create', [StudentController::class, 'create']);
Route::post('students/create', [StudentController::class, 'save']);

// load edit form
Route::get('students/edit/{id}', [StudentController::class, 'edit']);
Route::post('students/edit/{id}', [StudentController::class, 'update']);

// get post put patch delete