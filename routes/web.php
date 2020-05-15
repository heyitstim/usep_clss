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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@student_index')->name('home');

    Route::get('/', 'HomeController@student_index')->name('home');

    Route::get('/Faculty_List', 'StudentProctorListController@return_faculty_list')->name('faculty_list');

    Route::post('/Faculty_Evaluation_Form', 'QuestionaireController@faculty_evaluation_form')->name('faculty_eval_form');

    Route::post('/Faculty_Evaluation_Form/Success', 'QuestionaireController@store_faculty_evaluation_form')->name('store_faculty_evaluation_form');

    Route::get('/CustomerFeedback/OCSC', 'QuestionaireController@customer_feedback_form')->name('customer_feedback_form_ocsc');

    Route::get('/CustomerFeedback/OSAS', 'QuestionaireController@customer_feedback_form')->name('customer_feedback_form_osas');

    Route::get('/CustomerFeedback/Clinic', 'QuestionaireController@customer_feedback_form')->name('customer_feedback_form_clinic');

    Route::get('/CustomerFeedback/UAGC', 'QuestionaireController@customer_feedback_form')->name('customer_feedback_form_uagc');

    Route::get('/CustomerFeedback/Finance', 'QuestionaireController@customer_feedback_form')->name('customer_feedback_form_finance');

    Route::get('/CustomerFeedback/ULRC', 'QuestionaireController@customer_feedback_form')->name('customer_feedback_form_ulrc');

    Route::get('/CustomerFeedback/OUR', 'QuestionaireController@customer_feedback_form')->name('customer_feedback_form_our');

});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['middleware' => ['auth', 'is_admin']], function() {
    Route::get('admin/dashboard', 'HomeController@admin_index')->name('admin.dashboard');
});
