@extends('frontend.app')
@section('title', 'Member Page')
    
@section('content')
<div class="container-fluid  bg-secondary">
    <h2 class="text-center">Member Details</h2><hr><br><br>
    
    <div class="row p-2">
        @foreach ($members as $member)
            <div class="col-md-3 p-1 border border-primary">
                <img style="width: 200px" class="m-0" src="{{asset('images/'.$member->member_photo)}}" alt="...">
                <h5 class="m-0">{{ $member->member_name }}</h5>
                <p class="m-0">Father Name: {{ $member->member_father_name }}</p>
                <p class="m-0">Home Address: {{ $member->member_address}}</p>
                <p class="m-0">Father Name: {{ $member->member_phone_number}}</p>
                <p class="m-0">Designation: {{ $member->member_designation }}</p> 
                <p class="m-0">Current Job: {{ $member->member_current_job }}</p>
            </div>
        @endforeach
       
    </div>
    
</div>
@endsection