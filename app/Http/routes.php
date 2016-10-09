<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('/signup', [
    'uses'  =>  'UserController@postSignUp',
    'as'    =>  'signup'
]);

Route::post('/signin', [
    'uses'  =>  'UserController@postSignIn',
    'as'    =>  'signin'
]);

Route::get('/account', [
    'uses'  =>  'UserController@getAccount',
    'as'    =>  'account'
]);

Route::get('/logout', [
    'uses'  =>  'UserController@getLogout',
    'as'    =>  'logout'
]);

//View the dash board
Route::get('/dashboard', [
    'uses'  =>  'PostsController@getDashboard',
    'as'    =>  'dashboard',
    'middleware'    =>  'auth'
]);

// Add New Post Route
Route::post('/createpost', [
    'uses'  =>  'PostsController@postCreatePost',
    'as'    =>  'post.create',
    'middleware'    =>  'auth'
]);

Route::get('/post-delete/{postid}', [
    'uses'  =>  'PostsController@getDeletePost',
    'as'    =>  'post.delete',
    'middleware'    =>  'auth'
]);

// the ajax edit posts
Route::post('/edit', [
    'uses' => 'PostsController@postEditPost',
    'as'   => 'edit'
]);
