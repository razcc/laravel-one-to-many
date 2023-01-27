@extends('layouts.app')

@section('content')
    {{-- @if ($errors->any())
        <div class="alert alert-danger my-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form method="POST" action="{{ route('admin.posts.store') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="string" class="form-control @error('title') is-invalid @enderror">
            {{-- @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}

        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input name="description" type="text" class="form-control @error('description') is-invalid @enderror">
        </div>
        {{-- @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <div class="mb-3">
            <label>Categorie</label>
            <select class="form-controll" name="category_id">
                <option value="">Seleziona la categoria</option>

                @foreach ($categories as $elem)
                    <option value="{{ $elem['id'] }}">{{ $elem['name'] }}</option>
                @endforeach
            </select>


        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
