<?php

// example
// http://www.programmableweb.com/api/gitlab

Route::group(['prefix' => 'v1'], function () {
    Route::get('/', function () {
        return auth('api')->user();
    });
});
