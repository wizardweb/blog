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

Route::group(['middleware'=> ['validateBackHistory']], function(){

	Route::get('/',array('before' => 'auth', function () {
		
	
		return view('welcome');
	}))->name('home');

	Route::get('users',function(){
		echo 'testsss';
		//return 'users';
	});


    
	Route::get('/getImport','ExcelController@getImport');
	Route::post('/postImport','ExcelController@postImport');

	
	Route::post('/signup', [
		'uses' => 'UserController@postSignUp',
		'as' => 'signup'
	]);


	Route::post('/signin', [
			'uses' => 'UserController@postSignIn',
			'as' => 'signin'
	]);


	Route::get('/logout', [

			'uses' => 'UserController@getLogout',
			'as' => 'logout',

	]);




	Route::post('/Acount', [
			'uses' => 'UserController@getAcount',
			'as' => 'acount'
	]);



	Route::get('/dashboard', [

		'uses' => 'PostController@getDashboard',
		'as' => 'dashboard',
		'middleware' => 'auth',

	]);


	Route::post('/createpost', [
		'uses' => 'PostController@postCreatePost',
		'as' => 'post.create',
		'middleware' => 'auth'
	]);

	Route::get('/delete-post/{post_id}', [
		'uses' => 'PostController@getDeletePost',
		'as' => 'post.delete',
		'middleware' => 'auth'
	]);

	Route::post('/edit', [
		'uses' => 'PostController@postEditPost',
		'as' => 'edit'
	]);

	Route::post('/like', [
		'uses' => 'PostController@postLikePost',
		'as' => 'like'
	]);


	//Auth::routes();

	Route::get('/home', 'HomeController@index');

});