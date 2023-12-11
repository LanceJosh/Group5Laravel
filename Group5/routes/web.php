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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         $users = User::all();
//         return view('dashboard', compact('users'));
//     })->name('dashboard');
// });
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

//Admin CRUD
Route::get('/dashboard', function () {
    $users = User::all();
    return view('dashboard', compact('users'));
})->name('dashboard')->middleware('role:admin');
Route::get('/users/{id}/edit',[UserController::class ,'edit'])->name('users.edit')->middleware('role:admin');
Route::put('/users/{id}', [UserController::class ,'update'])->name('users.update')->middleware('role:admin');
Route::get('/users/{id}', [UserController::class ,'show'])->name('users.show')->middleware('role:admin');
Route::delete('/users/{id}', [UserController::class ,'destroy'])->name('users.destroy')->middleware('role:admin');


//Employer
Route::get('/jobs', [JobController::class, 'index'])->name('job.index')->middleware('role:employer');
Route::get('/jobs/create', [JobController::class, 'create'])->name('job.create')->middleware('role:employer');
Route::post('/store', [JobController::class, 'store'])->name('job.store')->middleware('role:employer');
Route::get('/job/{job}/edit', [JobController::class, 'edit'])->name('job.edit');

Route::put('/job/{job}/update', [JobController::class, 'update'])->name('job.update');
Route::delete('/job/{job}/delete', [JobController::class, 'delete'])->name('job.delete');
Route::get('/job/{job}/applicants', [JobController::class, 'show_applicants'])->name('job.applicants');
Route::put('job/{application}/accept', [ApplicationController::class, 'accept_application'])->name('application.accept');
Route::put('job/{application}/reject', [ApplicationController::class, 'reject_application'])->name('application.reject');

//applicant
Route::get('/applicant/jobs', [JobController::class, 'showAllJobsToApplicant'])->name('applicant.index');
Route::get('/applicant/{job}/apply', [ApplicationController::class, 'apply'])->name('applicant.apply');
Route::post('/applicant/submit-application', [ApplicationController::class, 'submit_application'])->name('applicant.submit');
Route::get('/applicant/my-applications', [ApplicationController::class, 'my_applications'])->name('applicant.my-applications');
Route::delete('/applicant/{application}/cancel', [ApplicationController::class, 'cancel'])->name('applicant.cancel');

//profile
Route::put('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');

Route::get('/all/category', [CategoryController::class,'index'])->name('AllCat')->middleware('role:admin');
Route::post('/all/category', [CategoryController::class, 'store'])->name('categories.store')->middleware('role:admin');
Route::get('/category/edit/{id}', [CategoryController::class, 'Edit'])->middleware('role:admin');
Route::post('/category/update/{id}', [CategoryController::class, 'Update'])->name('update.category')->middleware('role:admin');
Route::get('/category/delete/{id}', [CategoryController::class, 'Delete'])->middleware('role:admin');