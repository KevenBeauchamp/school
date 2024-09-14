<?php

use App\Http\Controllers\CarnetController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\RulesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//controller for class
Route::get('/class',[ClassController::class, 'index']);
Route::post('/class', [ClassController::class, 'store']);
Route::get('/class/{id}', [ClassController::class, 'show']);
Route::put('/class/{id}', [ClassController::class, 'update']);
Route::delete('/class/{id}', [ClassController::class, 'destroy']);
Route::get('/class/search/{name}', [ClassController::class, 'search']);
//Notes
Route::get('/notes',[NotesController::class, 'index']);
Route::post('/notes', [NotesController::class, 'store']);
Route::get('/notes/{id}', [NotesController::class, 'show']);
Route::put('/notes/{id}', [NotesController::class, 'update']);
Route::delete('/notes/{id}', [NotesController::class, 'destroy']);
//carnet
Route::get('/carnet',[CarnetController::class, 'index']);
Route::post('/carnet', [CarnetController::class, 'store']);
Route::get('/carnet/{id}', [CarnetController::class, 'show']);
Route::put('/carnet/{id}', [CarnetController::class, 'update']);
Route::delete('/carnet/{id}', [CarnetController::class, 'destroy']);
//parents
Route::get('/parents',[ParentsController::class, 'index']);
Route::post('/parents', [ParentsController::class, 'store']);
Route::get('/parents/{id}', [ParentsController::class, 'show']);
Route::put('/parents/{id}', [ParentsController::class, 'update']);
Route::delete('/parents/{id}', [ParentsController::class, 'destroy']);
//rules
Route::get('/rules',[RulesController::class, 'index']);
Route::post('/rules', [RulesController::class, 'store']);
Route::get('/rules/{id}', [RulesController::class, 'show']);
Route::put('/rules/{id}', [RulesController::class, 'update']);
Route::delete('/rules/{id}', [RulesController::class, 'destroy']);
//student
Route::get('/students',[StudentController::class, 'index']);
Route::post('/students', [StudentController::class, 'store']);
Route::get('/students/{id}', [StudentController::class, 'show']);
Route::put('/students/{id}', [StudentController::class, 'update']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);
//teachers
Route::get('/teachers',[TeacherController::class, 'index']);
Route::post('/teachers', [TeacherController::class, 'store']);
Route::get('/teachers/{id}', [TeacherController::class, 'show']);
Route::put('/teachers/{id}', [TeacherController::class, 'update']);
Route::delete('/teachers/{id}', [TeacherController::class, 'destroy']);
//user
Route::get('/users',[UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);
//courses
Route::get('/courses',[CoursesController::class, 'index']);
Route::post('/courses', [CoursesController::class, 'store']);
Route::get('/courses/{id}', [CoursesController::class, 'show']);
Route::put('/courses/{id}', [CoursesController::class, 'update']);
Route::delete('/courses/{id}', [CoursesController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
