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
            
            <tr>                
                <td>{{ $singolo_post['id'] }}</td>
                <td>{{ $singolo_post['title'] }}</td>
                <td>{{ $singolo_post['description'] }}</td>
                <td>
                    {{-- Edit --}}
                    <a href="{{ route('admin.posts.edit', $singolo_post['id']) }}">Edit</a>

                    {{-- Destrroy --}}
                    <form action="">
                        <button type="submit">Destroy</button>
                    </form>
                </td>
            </tr>

        </tbody>
    </table>
@endsection