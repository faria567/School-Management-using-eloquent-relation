<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Models\Teacher;
use App\Models\Section;
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


    

    //one to one
   
    // $section = Teacher::find(2)->section;
    // return $section;

   
    //$teacher = Section::find(2)->teacher;
    // return $teacher;



    $teachers= Teacher::all();
    //return $teachers;

    return view('welcome',compact('teachers'));



});

// Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//     Route::get('/dashboard', [AdminDashboardController::class,'index'])->name('dashboard');
// });

