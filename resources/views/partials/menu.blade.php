<nav class="navbar navbar-expand-lg bg-white mt-3">
  <a class="navbar-brand d-block d-sm-block d-md-none" href="#">Kategori</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-lg-center" id="navbar-kategori">
      @foreach ($categories as $category)
        <ul class="navbar-nav">
          <li class="menu nav-item">
            <h3><a class="nav-link fs-5" href="posts?category={{ $category->slug }}">{{ $category->name }}</a></h3>
          </li>
        </ul>
       @endforeach
    </div>
    
</nav>

  <style>
    .menu a{
      margin-left: 40px;
    }
  </style>