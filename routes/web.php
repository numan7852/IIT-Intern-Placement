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
Route::get('/student', 'StudentController@viewStudentList')->name('student');
Route::get('/company', 'CompanyController@viewCompanyList')->name('company');
Route::get('/studentSkillSet', 'SkillController@viewStudentSkillSetList')->name('studentSkillSet');
Route::get('/rpoSkillSet', 'SkillController@viewRPOSkillSetList')->name('rpoSkillSet');

Route::get('/choiceform', 'FormController@viewChoiceForm')->name('choiceForm');
Route::get('/report', 'ReportController@viewReport')->name('report');
Route::get('/companyallocation', 'CompanyAllocationController@viewAllocationList')->name('companyAllocation');

Route::get('/companyratingForm', 'RatingFormController@viewRatingForm')->name('companyRatingForm');
Route::get('/companyRatingStore', 'RatingFormController@storeRating')->name('RatingStore');


Route::get('/companyrating', 'RatingFormController@viewRating')->name('companyRating');


Route::get('/companyinformation', 'CompanyController@showCompanyAddForm')->name('companyInformation');
Route::post('/companyinformation', 'CompanyController@storeCompanyInformation')->name('company_store');

Route::get('/viewcompanyinformation', 'CompanyController@viewCompanyInformation')->name('viewCompanyInformation');
Route::get('/editCompanyinformation', 'CompanyController@showCompanyEditForm')->name('editCompanyInformation');
Route::post('/editCompanyinformation', 'CompanyController@updateCompanyInformation')->name('company_update');

Route::get('/studentinformation/{id}', 'StudentController@viewStudentInformation')->name('studentInformation');
Route::get('/editProfile', 'UserController@showEditForm')->name('editProfile');

Route::post('/rpoSkillSet', 'SkillController@storeSkillSet')->name('rpoSkillSet_Store');
Route::post('/studentSkillScore', 'SkillController@storeSkillScore')->name('student_skill_store');
Route::get('/uploadCGPA', 'RPOController@viewUploadCGPA')->name('uploadCGPA');
Route::post('/uploadCGPA', 'RPOController@storeCGPA')->name('cgpa_store');
Route::post('/choiceForm', 'FormController@storeChoiceForm')->name('choice_store');

Route::get('/allocate', 'CompanyAllocationController@allocate')->name('company_allocate');

Route::get('/choiceformEnable', 'FormController@choiceFormEnable')->name('choice_form_enable');
Route::get('/choiceformDisable', 'FormController@choiceformDisable')->name('choice_form_disable');

Route::get('/ratingformEnable', 'FormController@ratingFormEnable')->name('rating_form_enable');
Route::get('/ratingformDisable', 'FormController@ratingformDisable')->name('rating_form_disable');


















