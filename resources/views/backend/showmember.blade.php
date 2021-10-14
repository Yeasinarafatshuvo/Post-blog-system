@extends('backend.app')
@section('title', 'show Member')
    
@section('content')
    <div class="container-fluid">
        @if (session()->has('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <h2>Members Detials</h2>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>ADDRESS</th>
                    <th>PHONE NUMBER</th>
                    <th>FATHER NAME</th>
                    <th>DESIGNATION</th>
                    <th>CURRENT JOB</th>
                    <th>PHOTO</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($member as $item)
                    <tr>
                        <td>{{ $item->member_name }}</td>
                        <td>{{ $item->member_address }}</td>
                        <td>{{ $item->member_phone_number }}</td>
                        <td>{{ $item->member_father_name }}</td>
                        <td>{{ $item->member_designation }}</td>
                        <td>{{ $item->member_current_job }}</td>
                        <td><img class="image-size" src="{{ asset('images/' .$item->member_photo) }}" alt=""></td>
                        <td>
                           <button class="btn btn-success"> <a href="{{ url('/admin/member/edit', $item->id) }}">Edit</a></button>
                           <button class="btn btn-danger"> <a href="{{ url('/admin/member/delete', $item->id) }}">Delete</a></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
