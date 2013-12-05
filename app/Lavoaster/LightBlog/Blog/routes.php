<?php

Route::group(['prefix' => '/'], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'Lavoaster\LightBlog\Blog\Controllers\BlogController@index']);
});

Route::group(['prefix' => 'post'], function () {
    Route::post('/', ['as' => 'post.store', 'uses' => 'Lavoaster\LightBlog\Blog\Controllers\PostController@store']);
    Route::get('create', ['as' => 'post.create', 'uses' => 'Lavoaster\LightBlog\Blog\Controllers\PostController@create']);
    Route::get('{id}', ['as' => 'post.show', 'uses' => 'Lavoaster\LightBlog\Blog\Controllers\PostController@show']);
});

Route::group(['prefix' => 'editor'], function () {
    Route::get('tweet/{id}', ['as' => 'editor.tweet', 'uses' => 'Lavoaster\LightBlog\Blog\Controllers\EditorController@tweet']);
    Route::post('attachment', ['as' => 'editor.attachment', 'uses' => 'Lavoaster\LightBlog\Blog\Controllers\EditorController@attachment']);
});