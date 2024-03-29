@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header text-center">
        {{ isset($category) ? 'Edit Category' : 'Create Category' }}
    </div>
    <div class="card-body">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" method="POST">
            @csrf
            @if(isset($category))
                @method('PUT')
            @endif
            <div class="form-group m-4">
                <label class="form-control" for="name">Category Name</label>
                <input type="text" id="name" class="form-control" name="name" value="{{ isset($category) ? $category->name : ''  }}">
            </div>
            <div class="form-group ml-4">
                <button type="submit" class="btn btn-success">
                    {{ isset($category) ? 'Update Category' : 'Add Category' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
