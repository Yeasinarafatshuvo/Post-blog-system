<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span> <i class="fas fa-bars navbar-icon"></i> </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-right">
          <li class="nav-item active">
            <a class="nav-link text-center text-md-left" href="{{ route('admin.frontpage') }}">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-center text-md-left" href="{{ route('admin.member.create') }}">Add Members</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-center text-md-left" href="{{ route('admin.member.show') }}">Show Members</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-center text-md-left" href="{{ route('admin.post.create') }}">Add Post</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-center text-md-left" href="{{ route('admin.post.show') }}">Show Post</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-center text-md-left" href="{{ route('admin.logout') }}">Logout</a>
          </li>
                       
        </ul>
      </div>
    


</nav>


