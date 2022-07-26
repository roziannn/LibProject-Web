<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    <div class="container">
      <a class="navbar-brand" href="/" ><img src="{{ asset("/img/logo.png")}}" class="img"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/posts">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">Challenge</a>
          </li>
        </ul>
      </div>

      
      <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome, {{ auth()->user()->username }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/account/profile"><i class="fa-solid fa-gear"></i> Pengaturan</a>
              <a class="dropdown-item" href="/dashboard/posts"><i class="fa-solid fa-sheet-plastic"></i> My Project</a>
              <a class="dropdown-item" href="/dashboard/admin"><i class="fa-solid fa-sheet-plastic"></i> Dashboard Admin</a>
              <hr class="dropdown-divider">
              <form class="mb-0" action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item text-danger"><i class="fa-solid fa-arrow-right-from-bracket "></i> Logout</button>
              </form>
            </ul>
          </li>
        @else
        <li class="nav-item">
          <!-- <a href="/login" class="nav-link"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>           -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Login </button>
        </li>
        @endauth
      </ul>
    </div>
</nav>

      
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="model-title mb-0">Login Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">

      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width:100% ;">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
        </div>
      @endif

      @if(session()->has('loginError'))
      <script>
                $('#myModal').modal('show')
            </script>
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:100% ;">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
        </div>
      @endif
      

      <form action="/login" method="post">
        @csrf
        <div class="form-group mb-3">
          <label for="email">Email address</label>
          <input type="email"  name="email" class="form-control @error('email') is-invalid @enderror" id="email" required placeholder="Enter email" autofocus required value="{{ old ('email')}}">
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
            </div>
            <div class="form-group mb-3">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password"  required placeholder="Enter Password" required>
              <!-- <p class="forgotpass" style="margin-top:10px;margin-left:364px;"><a href="/forgotpass">Lupa Password?</a></p> -->
            </div>
            <div class="text-right justify-content-around mt-3">
              <button type="submit" class="btn btn-primary">Masuk</a></button>
              <!-- <button type="submit" class="btn btn-secondary"><a href="/register">Daftar Akun</a></button> -->
            </div>
            <p>Belum punya akun? Daftar akun <a href="/register">disini</a></p>
        </form>
        
      </div>
    </div>
  </div>
</div>



<style>

.text-right {
    text-align: right!important;
}

    .search-field{
    margin-right: 30px;
    height: 40px;
}
.navbar-nav li{
    }

    .img{
      width: 140px;
    }

    .nav-item a{
      margin-right: 20px;
    }
</style>