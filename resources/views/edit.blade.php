@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Edit Post <small> and mark it complete!</small></h1>
    </div>

    <form action="{{ action('PostsController@handleEdit') }}" method="post" role="form">
        <input type="hidden" name="id" value="{{ $post->id }}">

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $post->title }}" />
        </div>
        <div class="form-group">
            <label for="blogpost">Publisher</label>
            <input type="text" class="form-control" name="blogpost" value="{{ $post->blogpost }}" />
        </div>
        <div class="checkbox">
            <label for="complete">
                <input type="checkbox" name="complete" {{ $post->complete ? 'checked' : '' }} /> Complete?
            </label>
        </div>
        <input type="submit" value="Save" class="btn btn-primary" />
        <a href="{{ action('PostsController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop

