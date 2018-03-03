<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('resetPass','UserController@resetPassReq');

Route::group(['middleware' => ['api','cors'], 'prefix' => 'v1'], function(){

    /**
     * Users Authentication
     *
     */
    Route::post('user/login', 'AuthController@userAuth');
    Route::post('admin/login', 'AuthController@adminAuth');

    /**
     * Student CRUD
     *
     */
    Route::get('students/{q}', 'UserController@search');
    Route::delete('student/{id}', 'UserController@destroy');
    Route::get('student', 'UserController@show');
    Route::get('students', 'UserController@index');
    Route::post('student', 'UserController@store');
    Route::patch('student', 'UserController@update');
    Route::post('user/avatarUpload','UserController@update_avatar');
	 Route::post('/student/started','UserController@start');

    //    Route::post('/user/signup', 'AuthController@store');


    Route::group(['middleware' => ['jwt.auth','cors']], function(){

			Route::get('dashboard','UserController@home')->name('dashboard');

			Route::post('teacher','TeacherController@store');
			Route::get('teacher','TeacherController@show');
			Route::get('teachers','TeacherController@index');
			Route::get('teacher','TeacherController@update');
			Route::delete('teacher/{id}','TeacherController@destroy');
			Route::post('teacher/avatarUpload','TeacherController@update_avatar');
			Route::patch('profile/teacher/edit','TeacherController@update');
			Route::get('/projects','ProjectController@showTeacherProject');

			Route::group(['prefix' => 'project'],function(){
				Route::get('/','ProjectController@showStudentProject');
				Route::get('/{id}','ProjectController@show');
				Route::post('/create','ProjectController@store');
				Route::post('/{id}/member/add','ProjectMemberController@store');
				Route::delete('/{id}/member/{member}/delete','ProjectMemberController@destroy');
				Route::get('/{id}/members','ProjectMemberController@show');
				Route::post('/{id}/card/add','CardController@store');
				Route::get('/{id}/cards','CardController@show');

				Route::delete('/{id}/card/{card}/delete','CardController@destroy');
				Route::post('/{id}/card/{card}/member/add','CardMemberController@store');
				Route::get('/{id}/card/{card}/members','CardMemberController@show');
				Route::delete('/{id}/card/{card}/member/{member}/delete','CardMemberController@destroy');
				// Route::get('all','ProjectController@showStudentProject');
			});
			// Route::post('/profile/edit/','TestAuthController@EditProfile');

			Route::post('/admin','AdminController@store');
			Route::get('/admin','AdminController@show');
			Route::patch('/admin','AdminController@update');
    });
});
