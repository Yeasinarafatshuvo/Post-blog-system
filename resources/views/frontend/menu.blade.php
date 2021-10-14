<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href=""><img class=" ml-3 brand-logo" style="width:90px" src="{{asset('images/jobokollan-removebg-preview.png')}}" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/') }}">HOME</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('frontend.post') }}">Post</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('frontend.member') }}">Member</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('frontend.about') }}">About</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/login') }}">Admin</a>
          </li>
      </ul>
    </div>
  </nav>