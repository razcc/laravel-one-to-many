@extends('layouts.app')

@section('content')
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
            @foreach ($posts as $post )
            <tr>                
                <td>{{ $post['id'] }}</td>
                <td>{{ $post['title'] }}</td>
                <td>{{ $post['description'] }}</td>
                <td>
                    <a href="{{ route('admin.posts.edit', $post['id']) }}">Edit</a>
                    <form action="">
                        <button type="submit">Destroy</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
@endsection
