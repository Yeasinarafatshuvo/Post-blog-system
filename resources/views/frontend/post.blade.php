@extends('frontend.app')
@section('title', 'Post Page')
    
@section('content')
<div class="container mt-3">
    <h2 class="text-center bg-success">বারিকান্দি যুব সমাজ কল্যান পরিষদের কার্যক্রম </h2><br><br>
    
    <div class="row p-2 m-2">
        @foreach ($post as $item)
            <div class="col-md-4 p-1">
                <div class="card" style="width: 18rem;">       
                    <img src="{{asset('images/'.$item->post_photo)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Service  Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    
                </div>
            </div>
        @endforeach
       
    </div>
    
</div>
@endsection