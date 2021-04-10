<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterControllerER;
use App\Http\Controllers\RegisterControllerEE;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\PostJobController;
use App\Http\Controllers\EmploymentController;
use App\Http\Controllers\QuestionController;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

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
// Auth::routes();


Route::get('/',[HomeController::Class,'employeeHome'])->name('employee.home');

Route::get('/find-job',[EmploymentController::class,'index'])->name('employee.findjob');
Route::get('/find-job/{post_id}/{employer_id}',[EmploymentController::class,'detailJob'])->name('employee.detailJob')->middleware('auth');
Route::resource('resume',ResumeController::class)->middleware('auth');

//Route::get('faq',[questionController::class,'employeeFaq'])->name('employee.faq');
Route::get('FAQ', function () {
    return view('employee/FAQ');
})->name('employee.faq');

Route::get('sign-in', [LoginController::class,'viewEmployee'])->name('employee.viewLogIn');
Route::post('sign-in', [LoginController::class, 'login'])->name('employee.login');
Route::post('/', [LoginController::class, 'logoutEmployee'])->name('employee.logout');

Route::get('sign-up', [RegisterControllerEE::class, 'create'])->name('employee.register');
Route::post('sign-up', [RegisterControllerEE::class, 'store'])->name('employee.store');






// route employers
Route::group(['prefix' => 'employer'], function () {
    Route::get('/',[HomeController::Class,'employerHome'])->name('employer.home');
    Route::get('/home', [HomeController::class, 'employer']);

    Route::get('find-resume', function () {
        return view('employer/findResume');
    })->name('employer.findResume');

    Route::get('FAQ', function () {
        return view('employer/FAQ');
    })->name('employer.faq');

    Route::resource('job',PostJobController::class)->middleware('auth');
    Route::get('sign-in', [LoginController::class, 'viewEmployer'])->name('employer.viewLogIn');
    Route::post('sign-in', [LoginController::class, 'login'])->name('employer.login');
    Route::post('/', [LoginController::class, 'logoutEmployer'])->name('employer.logout');

    Route::get('sign-up', [RegisterControllerER::class, 'create'])->name('employer.register');
    Route::post('sign-up', [RegisterControllerER::class, 'store'])->name('employer.store');
});
