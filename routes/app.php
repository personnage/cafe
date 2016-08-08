<?php

// GET  :almost_there            - check your email to confirm your account
// GET  :confirmation/{token?}   - accept confirmation or show confirmation form
// POST :confirmation            - create new confirmation and send

// auth()->login(\App\Models\User::find(1));


// Authentication With Socialite
Route::group(['prefix' => 'auth/{provider}', 'namespace' => 'Auth'], function () {
    Route::get('/', 'AuthController@redirectToProvider');
    Route::get('callback', 'AuthController@handleProviderCallback');
});

Route::get('almost_there', 'Auth\ConfirmationsController@index');
Route::get('confirmation/{token?}', 'Auth\ConfirmationsController@showEmailForm');
Route::post('confirmation', 'Auth\ConfirmationsController@sendConfirmationLinkEmail');

Route::group(['domain' => 'allcafe.app'], function () {
    Route::auth();
    Route::get('/', 'HomeController@index')->name('index');
});

Route::group(['domain' => '{city}.allcafe.app'], function () {
    Route::get('/', 'HomeController@home')->name('home');
});

// Личный кабинет для зарегистрированного пользователя.
Route::group(['prefix' => 'community', 'middleware' => 'auth', 'namespace' => 'Community'], function () {
    // Route::get('profile', 'ProfileControlller@show');
});




// Раздел "Новости и открытия, обзоры, интервью"
Route::get('/news', [
    'as' => 'news.categories.list',
    'uses' => 'NewsController@categoriesList',
]);

// Список статей одной категории раздела "Новости и открытия, обзоры, интервью"
Route::get('/news/{categoryName}', [
    'as' => 'news.items.list',
    'uses' => 'NewsController@itemsList',
]);

/*
// news template
Route::get('/news/total', function () {
    return view('app.content.news.category');
});

Route::get('/news/total/{year}/{month}/{day}/{name}', function () {
    return view('app.content.news.item');
});

// articles template
Route::get('/news/boris', function () {
    return view('app.content.articles.category');
});

Route::get('/news/boris/{articleTitle}', function () {
    return view('app.content.articles.item');
});

//bankets template
Route::get('restaurants/specials', function () {
    return view('app.content.bankets.types');
});

Route::get('restaurants/specials/{id}', function() {
    return view('app.content.bankets.category');
});

Route::get('restaurants/specials/{id}/{name}', function() {
    return view('app.content.bankets.item');
});
*/
