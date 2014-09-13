<?php

use App\Post;
use App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Http\Controllers\PostsController;
// app/routes.php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Bind route parameters.
Route::model('post', 'App\Post');

// Show pages.
Route::get('/', 'PostsController@index');
Route::get('/create', 'PostsController@create');
Route::get('/edit/{post}', 'PostsController@edit');
Route::get('/delete/{post}', 'PostsController@delete');

Route::get('/find/{post}', 'PostsController@findGame');
//findGame($id)

// Handle form submissions.
Route::post('/create', 'PostsController@handleCreate');
Route::post('/edit', 'PostsController@handleEdit');
Route::post('/delete', 'PostsController@handleDelete');

