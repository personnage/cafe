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

Route::auth();

Route::get('/', function (\Illuminate\Http\Request $request) {
    // auth()->logout();
    // auth()->loginUsingId(1);

    $posts = App\Models\Post::all();

    return view('welcome', compact('posts'));
});

/**
 * This is group routes services admin dashboard.
 * Middleware "Employee" must be included to any a controller.
 *
 * Note: This group have shared-base "auth" middleware across any request.
 */
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'auth',
], function () {
    Route::get('/', 'DashboardController@index');

    // remove impersonate session
    Route::get('impersonation', 'ImpersonationsController@destroy');

    Route::patch('user/{user}/delete', 'UserController@delete');
    Route::patch('user/{user}/restore', 'UserController@restore');
    Route::patch('user/{user}/confirm', 'UserController@confirm');
    Route::get('user/{user}/impersonate', 'UserController@impersonate');
    Route::resource('user', 'UserController');

    Route::resource('role', 'RoleController');

    // Route::resource('permission', 'PermissionController');
});

// Личный кабинет для зарегистрированного пользователя.
Route::group(['prefix' => 'community', 'middleware' => 'auth', 'namespace' => 'Community'], function () {
    // Route::get('profile', 'ProfileControlller@show');
});

Route::get('/home', 'HomeController@index');


// GET  :almost_there            - check your email to confirm your account
// GET  :confirmation/{token?}   - accept confirmation or show confirmation form
// POST :confirmation            - create new confirmation and send
Route::get('almost_there', 'Auth\ConfirmationsController@index');
Route::get('confirmation/{token?}', 'Auth\ConfirmationsController@showEmailForm');
Route::post('confirmation', 'Auth\ConfirmationsController@sendConfirmationLinkEmail');

// Authentication With Socialite
Route::group(['prefix' => 'auth/{provider}', 'namespace' => 'Auth'], function () {
    Route::get('/', 'AuthController@redirectToProvider');
    Route::get('login', 'AuthController@handleProviderCallback');
});
