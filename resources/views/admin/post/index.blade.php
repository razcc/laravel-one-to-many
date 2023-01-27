@extends('layouts.app')

@section('content')
    <div>
        <h4>
            <a href="{{ route('admin.posts.create') }}">Create Post</a>
        </h4>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>


            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post['id'] }}</td>
                    <td>
                        <a href=" {{ route('admin.posts.show', $post['id']) }}">
                            {{ $post['title'] }}
                        </a>
                    </td>
                    <td>{{ $post['description'] }}</td>
                    <td>
                        <a href="{{ route('admin.posts.edit', $post['id']) }}">
                            Edit
                        </a>
                        <form method="POST" action="{{ route('admin.posts.destroy', $post['id']) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Destroy</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    {{ $posts->links() }}
@endsection
