<?php

Route::group(['prefix' => '/'], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'Lavoaster\LightBlog\Blog\Controllers\BlogController@index']);
});

Route::group(['prefix' => 'editor'], function () {
    Route::get('tweet/{id}', ['as' => 'editor.tweet', 'uses' => 'Lavoaster\LightBlog\Blog\Controllers\EditorController@tweet']);
    Route::post('attachment', ['as' => 'editor.attachment', 'uses' => 'Lavoaster\LightBlog\Blog\Controllers\EditorController@attachment']);
});