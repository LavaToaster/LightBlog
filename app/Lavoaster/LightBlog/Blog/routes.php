<?php

Route::group(['prefix' => '/'], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'Lavoaster\LightBlog\Blog\Controllers\BlogController@index']);
});