<?php
use Illuminate\Support\Facades\Route;
// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes

    Route::crud('employer', 'EmployerCrudController');
    Route::crud('users', 'UsersCrudController');
    Route::get('charts/weekly-users', 'Charts\WeeklyUsersChartController@response')->name('charts.weekly-users.index');
    Route::crud('user', 'UserCrudController');
    Route::crud('question', 'QuestionCrudController');
    Route::crud('questions', 'QuestionsCrudController');
    Route::crud('failed_job', 'Failed_jobCrudController');
    Route::crud('industrie', 'IndustrieCrudController');
    Route::crud('hardskill', 'HardskillCrudController');
    Route::crud('softskill', 'SoftskillCrudController');
    Route::crud('basicform', 'BasicformCrudController');
    Route::crud('job', 'JobCrudController');
    Route::crud('post_job', 'Post_jobCrudController');
    Route::crud('resume', 'ResumeCrudController');
    Route::crud('language', 'LanguageCrudController');
    Route::crud('hobbies', 'HobbiesCrudController');
    Route::crud('citie', 'CitieCrudController');
}); // this should be the absolute last line of this file