@extends('frontend.app')
@section('title', 'About Page')

@section('content')
  
        <!-- about me section -->
        <div class="about-section">
            <div class="jumbotron pt-2">
                <div class="text-center mb-3">
                    <h3 class="font-weight-bolder ml-5">বারিকান্দি যুব সমাজ কল্যান পরিষদ</h3>
                </div>

                <div class="row">
                    <div class="col-lg-4 text-center">
                         <img class="rounded-circle imge" style="width: 300px"  src="{{ asset('images/jobokollan-removebg-preview.png') }}" alt="">
                    </div>
                    <div class="col-lg-8">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quibusdam adipisci quaerat expedita nostrum, quo molestiae at impedit labore laboriosam voluptatum ullam officia nisi totam, tenetur placeat dolorum distinctio eaque unde quisquam fuga? Odio aspernatur qui neque. Quaerat repellendus necessitatibus dignissimos iusto illo eveniet voluptas temporibus sed ut ad, dolores aut deserunt cumque at reiciendis, officia corrupti debitis. In eum, nulla velit id maxime eveniet eligendi rem sequi dolorum quasi laborum sunt amet quibusdam necessitatibus asperiores doloribus voluptas obcaecati soluta quam vitae ipsum placeat! Aliquam cumque, expedita vitae enim rerum aperiam unde nobis distinctio suscipit laudantium. Illo minima placeat eos?</p>

                        <a href="#demo" data-toggle='collapse'>Learn more</a>
                        <div id="demo" class="collapse">
                         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam itaque ipsa eligendi fugiat id quasi quod hic tenetur soluta, dicta provident vitae? Deserunt, adipisci sint dolor voluptate reprehenderit itaque, officia esse voluptas in a consequatur iusto commodi repellendus. Iste excepturi nobis dolor a officiis rem aperiam ea sunt consequatur doloribus!</p>

                        </div>
                        <div class="alert alert-success alert-dismissible">
                            <button class="close" data-dismiss="alert">&times;</button>
                            আমাদের ইউটিউব চ্যানেল <a href="#">সাবস্ক্রাইবকরুন</a>
                            
                        </div>
                        <div class="alert alert-success alert-dismissible">
                            <button class="close" data-dismiss="alert">&times;</button>
                            আমাদের ফেসবুক পেজ লাইক করুন <a href="https://www.facebook.com/groups/2565024423546524"><i class="fab fa-facebook"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="container mb-5 mt-5 text-center">
                    <h2>আমাদের সাথে যোগাযোগ করুন</h2><br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <form class="text-left">
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
                </div>
            </div>
      

        
    </div>
@endsection