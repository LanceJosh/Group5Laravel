<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApplicationController;
use App\Models\User;

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
    return view('index');
});


Route::get('/contact', function () {
    $users = User::all();
    return view('contact');

})->name('contact');
Route::get('/aboutus', function () {
    $users = User::all();
    return view('aboutus');

})->name('aboutus');


Route::get('/login-view', function(){
    return view('auth.login');
});

Route::get('/register-view', function(){
    return view('auth.register');
});

//users CRUD

Route::get('/dashboard', function () {
    $users = User::all();
    return view('dashboard', compact('users'));
})->name('dashboard')->middleware('role:admin');
Route::get('/users/{id}/edit',[UserController::class ,'edit'])->name('users.edit')->middleware('role:admin')->middleware('role:admin');
Route::put('/users/{id}', [UserController::class ,'update'])->name('users.update')->middleware('role:admin')->middleware('role:admin');
Route::get('/users/{id}', [UserController::class ,'show'])->name('users.show')->middleware('role:admin')->middleware('role:admin');
Route::delete('/users/{id}', [UserController::class ,'destroy'])->name('users.destroy')->middleware('role:admin')->middleware('role:admin');


//Employer
Route::get('/jobs', [JobController::class, 'index'])->name('job.index')->middleware('role:employer');
Route::get('/jobs/create', [JobController::class, 'create'])->name('job.create')->middleware('role:employer');
Route::post('/store', [JobController::class, 'store'])->name('job.store')->middleware('role:employer');
Route::get('/job/{job}/edit', [JobController::class, 'edit'])->name('job.edit')->middleware('role:employer');
Route::put('/job/{job}/update', [JobController::class, 'update'])->name('job.update')->middleware('role:employer');
Route::delete('/job/{job}/delete', [JobController::class, 'delete'])->name('job.delete')->middleware('role:employer');
Route::get('/job/{job}/applicants', [JobController::class, 'show_applicants'])->name('job.applicants')->middleware('role:employer');

//applicant
Route::get('/applicant/jobs', [JobController::class, 'showAllJobsToApplicant'])->name('applicant.index')->middleware('role:applicant');
Route::get('/applicant/{job}/apply', [ApplicationController::class, 'apply'])->name('applicant.apply')->middleware('role:applicant');
Route::post('/applicant/submit-application', [ApplicationController::class, 'submit_application'])->name('applicant.submit')->middleware('role:applicant');
Route::get('/applicant/my-applications', [ApplicationController::class, 'my_applications'])->name('applicant.my-applications')->middleware('role:applicant');
Route::delete('/applicant/{application}/cancel', [ApplicationController::class, 'cancel'])->name('applicant.cancel')->middleware('role:applicant');

Route::get('/all/category', [CategoryController::class,'index'])->name('AllCat')->middleware('role:applicant');
Route::post('/all/category', [CategoryController::class, 'store'])->name('categories.store')->middleware('role:applicant');
Route::get('/category/edit/{id}', [CategoryController::class, 'Edit'])->middleware('role:applicant');
Route::post('/category/update/{id}', [CategoryController::class, 'Update'])->name('update.category')->middleware('role:applicant');
Route::get('/category/delete/{id}', [CategoryController::class, 'Delete'])->middleware('role:applicant');
