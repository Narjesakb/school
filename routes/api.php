<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//--------------------------------------------------------------------------------------------
Route::post('create-school',[\App\Http\Controllers\SchoolController::class,'store']);
Route::delete('delete-school/{id}',[\App\Http\Controllers\SchoolController::class,'destroy']);
Route::get('index-school',[\App\Http\Controllers\SchoolController::class,'index']);
Route::patch('update-school',[\App\Http\Controllers\SchoolController::class,'update']);
//--------------------------------------------------------------------------------------------
Route::get('index-teacher',[\App\Http\Controllers\TeacherController::class,'index']);
Route::post('create-teacher',[\App\Http\Controllers\TeacherController::class,'store']);
Route::delete('delete-teacher/{id}',[\App\Http\Controllers\TeacherController::class,'destroy']);
Route::patch('update-teacher/{id}',[\App\Http\Controllers\TeacherController::class,'update']);
//--------------------------------------------------------------------------------------------
Route::get('index-student',[\App\Http\Controllers\StudentController::class,'index']);
Route::patch('update-student/{id}',[\App\Http\Controllers\StudentController::class,'update']);
Route::post('create-student',[\App\Http\Controllers\StudentController::class,'store']);
Route::delete('delete-student/{id}',[\App\Http\Controllers\StudentController::class,'destroy']);
//--------------------------------------------------------------------------------------------
Route::post('Class_room',[\App\Http\Controllers\Class_room::class,'store']);
Route::delete('delete-class/{id}',[\App\Http\Controllers\Class_room::class,'destroy']);
Route::get('index-class',[\App\Http\Controllers\Class_room::class,'index']);
Route::patch('update-class/{id}',[\App\Http\Controllers\Class_room::class,'update']);
//--------------------------------------------------------------------------------------------
Route::post('create-program',[\App\Http\Controllers\ProgramController::class,'store']);
Route::delete('delete-program/{id}',[\App\Http\Controllers\ProgramController::class,'destroy']);
Route::patch('update-program/{id}',[\App\Http\Controllers\ProgramController::class,'update']);
Route::get('index-program',[\App\Http\Controllers\ProgramController::class,'index']);
