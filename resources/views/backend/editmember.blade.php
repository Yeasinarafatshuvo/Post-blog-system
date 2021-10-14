@extends('backend.app')
@section('title', 'Edit Member')
    
@section('content')
<div class="container">
    <div class="row" style="margin-top: 45">
        <div class="col-md-5 offset-md-3">
            <h4>Update Member | Barikandi Jubo Songothon</h4>
            <hr>
           
            <form action="/admin/member/edit/{{ $member->id }}" method="POST" class="form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Add Member Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ $member->member_name }}">
                </div>
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
                <div class="form-group">
                    <label for="number">Add Member Phone Number</label>
                    <input type="text" name="number" class="form-control" placeholder="Enter number" value="{{ $member->member_phone_number }}">
                </div>
                <span class="text-danger">
                    @error('number')
                        {{ $message }}
                    @enderror
                </span>
                <div class="form-group">
                    <label for="address">Add Member address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter address" value="{{ $member->member_address }}">
                </div>
                <span class="text-danger">
                    @error('address')
                        {{ $message }}
                    @enderror
                </span>
                <div class="form-group">
                    <label for="father_name">Add Father Name</label>
                    <input type="text" name="father_name" class="form-control" placeholder="Enter Father Name" value="{{ $member->member_father_name }}">
                </div>
                <span class="text-danger">
                    @error('father_name')
                        {{ $message }}
                    @enderror
                </span>
                <div class="form-group">
                    <label for="designation">Add Member Designation</label>
                    <input type="text" name="designation" class="form-control" placeholder="Enter  Designation" value="{{ $member->member_designation}}">
                </div>
                <span class="text-danger">
                    @error('designation')
                        {{ $message }}
                    @enderror
                </span>
                <div class="form-group">
                    <label for="current_job">Add Member Current job</label>
                    <input type="text" name="current_job" class="form-control" placeholder="Enter  current job" value="{{ $member->member_current_job }}">
                </div>
                <span class="text-danger">
                    @error('current_job')
                        {{ $message }}
                    @enderror
                </span>
                <div class="form-group">
                    <label for="photo">Add Member Photo</label>
                    <input type="file" name="photo" class="form-control" placeholder="Enter  photo">
                </div>
                <span class="text-danger">
                    @error('photo')
                        {{ $message }}
                    @enderror
                </span>
                <button type="submit" class="btn btn-block btn-primary">upate</button>
            </form>

        </div>
    </div>
</div>
@endsection