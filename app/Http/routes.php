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

        Route::get('/posts/{post_id}/edit' , [
            'uses' => 'PostController@getUpdatePost',
            'as' => 'admin.blog.post.edit'
        ]);

        Route::get('/blog/post/{post_id}&{end}' , [
            'uses' => 'PostController@getSinglePost',
            'as' => 'admin.blog.single'
        ]);

        Route::post('/blog/post/update' , [
            'uses' => 'PostController@postUpdatePost',
            'as' => 'admin.blog.post.update'
        ]);

        Route::get('/blog/post/{post_id}/delete' , [
            'uses' => 'PostController@getDeletePost',
            'as' => 'admin.blog.post.delete'
        ]);

        Route::get('/categories' , [
            'uses' => 'CategoryController@getCategoryIndex',
            'as' => 'admin.blog.categories'
        ]);

        Route::post('/blog/category/create' , [
            'uses' => 'CategoryController@postCreateCategory' ,
            'as' => 'admin.blog.category.create'
        ]);
        
    });

});
