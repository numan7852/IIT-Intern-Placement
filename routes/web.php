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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/changePassword', 'UserController@change_password')->name('change_password');
Route::get('/notice', 'NoticeController@notice')->name('notice');
Route::get('/ipoh/student', 'StudentController@viewStudentList')->name('student');
Route::get('/ipoh/company', 'CompanyController@viewCompanyList')->name('company');
Route::get('/ipoh/choiceform', 'FormController@viewChoiceForm')->name('choiceForm');
Route::get('/ipoh/report', 'ReportController@viewReport')->name('report');
Route::get('/ipoh/companyallocation', 'CompanyAllocationController@viewAllocationList')->name('companyAllocation');
Route::get('/ipoh/companyrating', 'RatingFormController@viewRatingForm')->name('companyRatingForm');










