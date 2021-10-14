@extends('backend.app')
@section('title', 'Add Members')

@section('content')
    <div class="container">
            <div class="row" style="margin-top: 45">
                <div class="col-md-5 offset-md-3">
                    <h4>Add Member | Barikandi Jubo Songothon</h4>
                    <hr>
                   
                    <form action="/admin/member/add" method="POST" class="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Add Member Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ old('name') }}">
                        </div>
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                        <div class="form-group">
                            <label for="number">Add Member Phone Number</label>
                            <input type="text" name="number" class="form-control" placeholder="Enter number" value="{{ old('number') }}">
                        </div>
                        <span class="text-danger">
                            @error('number')
                                {{ $message }}
                            @enderror
                        </span>
                        <div class="form-group">
                            <label for="address">Add Member address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter address" value="{{ old('address') }}">
                        </div>
                        <span class="text-danger">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span>
                        <div class="form-group">
                            <label for="father_name">Add Father Name</label>
                            <input type="text" name="father_name" class="form-control" placeholder="Enter Father Name" value="{{ old('father_name') }}">
                        </div>
                        <span class="text-danger">
                            @error('father_name')
                                {{ $message }}
                            @enderror
                        </span>
                        <div class="form-group">
                            <label for="designation">Add Member Designation</label>
                            <input type="text" name="designation" class="form-control" placeholder="Enter  Designation" value="{{ old('designation') }}">
                        </div>
                        <span class="text-danger">
                            @error('designation')
                                {{ $message }}
                            @enderror
                        </span>
                        <div class="form-group">
                            <label for="current_job">Add Member Current job</label>
                            <input type="text" name="current_job" class="form-control" placeholder="Enter  current job" value="{{ old('current_job') }}">
                        </div>
                        <span class="text-danger">
                            @error('current_job')
                                {{ $message }}
                            @enderror
                        </span>
                        <div class="form-group">
                            <label for="photo">Add Member Photo</label>
                            <input type="file" name="photo" class="form-control" >
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
    
