<?php

// http://www.programmableweb.com/api/gitlab

Route::group(['prefix' => 'api/v1', 'as' => 'api.', 'middleware' => 'admin:api'], function() {
    Route::get('/', ['as' => 'welcome', function () {
        return auth('api')->user();
    }]);

    Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'Admin'], function () {
        Route::get('/', 'UserController@index');
        Route::get('{user}', 'UserController@show');
    });
});
