@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('posts.create') }}" class="btn btn-success">Add Post</a>
</div>

<div class="card card-default">
    <div class="card-header">Posts</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Post Image</th>
                <th>Post Title</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach($posts as $post)
                  <tr>
                      <td>
                          <img src="{{ asset('/storage/'.$post->image)  }}" width="140" height="80" alt="">
                      </td>
                      <td>
                          {{ $post->title }}
                      </td>
                      @if(!$post->trashed())
                      <td>
                        <a href="" class="btn btn-sm btn-info">Edit Post</a>
                      </td>
                      @endif
                      <td>
                      <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            {{ $post->trashed() ? 'Delete' : 'Trash' }}
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
