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

Route::group(['middleware' => ['web']] , function() {

    Route::get('/' , [
    	'uses' => 'PostController@getBlogIndex',
    	'as' => 'blog.index'
    ]);

    Route::get('/blog/{post_id}&{end}' , [
    	'uses' => 'PostController@getSinglePost',
    	'as' => 'blog.single'
    ]);

    /*other routes */

    Route::get('/about' , function() {
    	return view('frontend.other.about');
    })->name('about');

    Route::get('/contact' , [
    	'uses' => 'ContactMessageController@getControllerIndex',
    	'as' => 'contact'
    ]);

    Route::group(['prefix' => '/admin'] , function() {

        Route::get('/' , [
            'uses' => 'AdminController@getIndex',
            'as' => 'admin.index'
        ]);

        Route::get('/categories' , [
            'uses' => 'AdminController@getCategories',
            'as' => 'admin.categories'
        ]);

        Route::get('/posts' , [
            'uses' => 'PostController@getPosts',
            'as' => 'admin.blog.posts'
        ]);

        Route::get('/posts/create' , [
            'uses' => 'PostController@getNewPost',
            'as' => 'admin.blog.create_post'
        ]);

        Route::post('/post/create' , [
            'uses' => 'PostController@postNewPost',
            'as' => 'admin.blog.post.create'
        ]);

        Route::get('/posts/edit' , [
            'uses' => 'PostController@editPost',
            'as' => 'admin.blog.edit_post'
        ]);

        Route::get('/blog/post/{post_id}&{end}' , [
            'uses' => 'PostController@getSinglePost',
            'as' => 'admin.blog.single'
        ]);
        
    });

});
