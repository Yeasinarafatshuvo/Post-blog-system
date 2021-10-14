@extends('frontend.app')
@section('title', 'Home')


@section('content')
    <div class="container-fluid parallax m-0">
        <div class="row  d-flex justify-content-center ">
            <div class="col-md-8 text-center topDiv">
                <h1 class="text-white">বারিকান্দি যুব সমাজ কল্যান পরিষদ</h1>
                <h3 class="text-white">Mobile: 01779930077</h3>
                <button class="btn btn-primary">বারিকান্দি, ফতেহপুর, নোয়াখালী, চট্টগ্রাম, বাংলাদেশ  </button>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <h2 class="text-center">My Posts</h2><br><br>
        
        <div class="row p-2 m-2">
            @foreach ($post as $item)
                <div class="col-md-4 p-1">
                    <div class="card" style="width: 18rem;">       
                        <img src="{{asset('images/'.$item->post_photo)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $item->post_title }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>                        
                    </div>
                </div>
            @endforeach
           
        </div>
        
    </div>

    

    {{-- <div class="container mb-5 mt-5 text-center">
        <h2>Contact With Me</h2><br><br>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Your Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Your Mobile Number</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Your Email Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Your Message</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
                  </form>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117691.48532112781!2d90.95986477096561!3d22.807691048878404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754baa9f5e6548d%3A0x9cba439d3affc29b!2sNoakhali%20Sadar%20Upazila!5e0!3m2!1sen!2sbd!4v1627723515732!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div> --}}
    <!-- feedback starts  -->
    <section id="feedback">
        <div class="section-title">
          <h3 class="text-center text-light">Message From our chairman</h3>
          <hr class="hr-style">
      </div>

        <div class="row">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <p>1. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi assumenda odit error. Sint, id harum sequi voluptate officia eligendi ea?</p>
                  <img class="rounded-circle feedback-img" src="{{ asset('images/khursid.jpg') }}" alt="feedback img">
                  <h6>Khurshid Alam</h6>
              </div>
              
             
            </div>
           
            
          </div>
        </div>
     </section>
     <!-- feedback ends -->

@endsection
