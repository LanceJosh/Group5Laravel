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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $users = User::all();
        return view('dashboard', compact('users'));
    })->name('dashboard');
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
Route::get('/users/{id}/edit',[UserController::class ,'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class ,'update'])->name('users.update');
Route::get('/users/{id}', [UserController::class ,'show'])->name('users.show');
Route::delete('/users/{id}', [UserController::class ,'destroy'])->name('users.destroy');


//Employer
Route::get('/jobs', [JobController::class, 'index'])->name('job.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('job.create');
Route::post('/store', [JobController::class, 'store'])->name('job.store');
Route::get('/job/{job}/edit', [JobController::class, 'edit'])->name('job.edit');
Route::put('/job/{job}/update', [JobController::class, 'update'])->name('job.update');
Route::delete('/job/{job}/delete', [JobController::class, 'delete'])->name('job.delete');
Route::get('/job/{job}/applicants', [JobController::class, 'show_applicants'])->name('job.applicants');

//applicant
Route::get('/applicant/jobs', [JobController::class, 'showAllJobsToApplicant'])->name('applicant.index');
Route::get('/applicant/{job}/apply', [ApplicationController::class, 'apply'])->name('applicant.apply');
Route::post('/applicant/submit-application', [ApplicationController::class, 'submit_application'])->name('applicant.submit');
Route::get('/applicant/my-applications', [ApplicationController::class, 'my_applications'])->name('applicant.my-applications');
Route::delete('/applicant/{application}/cancel', [ApplicationController::class, 'cancel'])->name('applicant.cancel');

Route::get('/all/category', [CategoryController::class,'index'])->name('AllCat');
Route::post('/all/category', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'Edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'Update'])->name('update.category');
Route::get('/category/delete/{id}', [CategoryController::class, 'Delete']);