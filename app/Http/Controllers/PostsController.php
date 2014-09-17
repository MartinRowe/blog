<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Post;
use App\Http;

// app/controllers/PostsController.php

class PostsController extends Controller
{
    public function index()
    {
        // Show a listing of games.
        $posts = Post::all();

        return \View::make('index', compact('posts'));
    }

    public function create()
    {
        // Show the create game form.
        return \View::make('create');
    }

    public function handleCreate()
    {
        // Handle create form submission.
        $post = new Post;
        $post->title        = \Input::get('title');
        $post->blogpost    = \Input::get('blogpost');
        $post->complete     = \Input::has('complete');
        $post->save();

        return \Redirect::action('PostsController@index');
    }

    public function edit(Post $post)
    {
        // Show the edit game form.
        //return 'Im in edit';

        return \View::make('edit', compact('post'));
    }

    public function handleEdit()
    {
        // Handle edit form submission.
        $post = Post::findOrFail(\Input::get('id'));
        $post->title        = \Input::get('title');
        $post->blogpost    = \Input::get('blogpost');
        $post->complete     = \Input::has('complete');
        $post->save();

        return \Redirect::action('PostsController@index');
    }

    public function delete(Post $post)
    {
        // Show delete confirmation page.
        return \View::make('delete', compact('post'));
    }

    public function handleDelete()
    {
        // Handle the delete confirmation.
        $id = \Input::get('post');
        $post = Post::findOrFail($id);
        $post->delete();


        return \Redirect::action('PostsController@index');
    }

    /**
     * Show the profile for the given user.
     */
    public function findGame(Post $post)
    {
      //  $game = Game::find($id);
//return compact('id');

        return \View::make('find', compact('post'));
        //return View::make('user.profile', ['user' => $user]);
    }
}
