<?php

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

Route::get('/', 'PagesController@index');
Route::get('/join-us', 'PagesController@jobs');
Route::get('/job-detail/{name}', 'PagesController@jobDetail');
Route::get('/{name}/apply-job', 'PagesController@applyJob');
Route::post('/sendPesan', 'PagesController@sendPesans');
Route::get('/page-not-found', function () {
    return view('pages.notfound');
});
Route::post('/apply-job', 'JobController@sendApplyMail');

Auth::routes();//post login the only thing available

Route::get('/dashboard', 'DashboardController@index');
Route::get('/career', 'CareerController@index');
Route::get('/career/add', 'CareerController@newJob');
Route::post('/career/store', 'CareerController@store');
Route::get('/career/edit/{id}', 'CareerController@edit');
Route::post('/career/update/{id}', 'CareerController@update');
Route::get('/career/delete/{id}', 'CareerController@delete');

