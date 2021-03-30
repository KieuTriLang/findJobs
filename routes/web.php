<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('employee/welcome');
})->name('employee.home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('find-job', function () {
    return view('employee/findJob');
})->name('findJob');


Route::group(['prefix' => 'employer'], function () {

    Route::get('/', function () {
        return view('employer/home');
    })->name('employer.home');

    Route::get('find-resume', function () {
        return view('employer/findResume');
    })->name('employer.findResume');

    Route::get('FAQ', function () {
        return view('employer/FAQ');
    })->name('employer.faq');

    Route::get('sign-in', function () {
        return view('employer/login');
    })->name('employer.login');

    Route::get('sign-up', function () {
        return view('employer/register');
    })->name('employer.register');

});

