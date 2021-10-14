@extends('backend.app')
@section('title', 'Add Post');


@section('content')
<div class="container">
    <div class="row" style="margin-top: 45">
        <div class="col-md-5 offset-md-3">
            <h4>Add Post | Barikandi Jubo Songothon</h4>
            <hr>
           
            <form action="/admin/post/add" method="POST" class="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Enter Post Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{ old('title') }}">
                </div>
                <span class="text-danger">
                    @error('title')
                        {{ $message }}
                    @enderror
                </span>
                <div class="form-group">
                    <label for="body">Enter Post Body</label>
                    <textarea name="body" id="" cols="30" rows="8" class="form-control">{{old('body')}}</textarea>
                </div>
                <span class="text-danger">
                    @error('body')
                        {{ $message }}
                    @enderror
                </span>
                <div class="form-group">
                    <label for="photo">Enter Post Photo</label>
                    <input type="file" name="photo" class="form-control">
                </div>
                <span class="text-danger">
                    @error('photo')
                        {{ $message }}
                    @enderror
                </span>
                <button type="submit" class="btn btn-block btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection
