@extends('layout')

@section('content')
    <div class="page-header">
        <h1>All Posts <small>All Posts</small></h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('PostsController@create') }}" class="btn btn-primary">Create Post</a>
        </div>
    </div>

    @if ($posts->isEmpty())
        <p>There are no posts! :(</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Blog Post</th>
                    <th>Complete</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->blogpost }}</td>
                    <td>{{ $post->complete ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-default">Edit</a>
                        <a href="{{ action('PostsController@delete', $post->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop
