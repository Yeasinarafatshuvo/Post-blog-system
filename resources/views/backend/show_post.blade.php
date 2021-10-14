@extends('backend.app')
@section('title', 'Show Post')

@section('content')
   <h2>Post Details</h2>
    @if (session()->has('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
   <Table class="table table-dark">
        <thead>
           <tr>
                <th>TITLE</th>
                <th>BODY</th>
                <th>PHOTO</th>
                <th>ACTION</th>
           </tr>
        </thead>
        <tbody class="text-justify">
            @foreach ($post as $item)
                <tr>
                    <td>{{ $item->post_title }}</td>
                    <td>{{ $item->post_body }}</td>
                    <td><img class="image-size" src="{{ asset('images/' .$item->post_photo) }}" alt=""></td>
                    <td>
                        <button class="btn btn-sm btn-success"> <a href="{{ url('/admin/post/edit', $item->id) }}">Edit</a></button>
                        <button class="btn btn-sm btn-danger"> <a href="{{ url('/admin/post/delete', $item->id) }}">Delete</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
   </Table>
@endsection