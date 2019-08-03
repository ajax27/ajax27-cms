@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header">Create Post</div>
    <div class="card-body">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Post Title</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>

            <div class="form-group">
                <label for="description">Post Description</label>
                <textarea class="form-control" name="description" id="description" cols="5" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="content">Post Content</label>
                <textarea class="form-control" name="content" id="content" cols="5" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="published_at">Published On</label>
                <input class="form-control" type="text" name="published_at" id="published_at">
            </div>

            <div class="form-group">
                <label for="title">Post Image</label>
                <input class="form-control" type="file" name="image" id="image">
            </div>
            <button type="submit" class="btn btn-success">Create Post</button>
        </form>
    </div>
</div>
@endsection
