@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger my-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('admin.posts.update', $post['id']) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input value="{{ $post['title'] }}" name="title" type="string" class="form-control">

        </div>
        <div class="mb-3">
            <label fo class="form-label">Description</label>
            <input value="{{ $post['description'] }}" name="description" type="text" class="form-control">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
