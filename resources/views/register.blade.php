<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
    <link href='img/singlelogo.png' rel='shortcut icon' style="width:50%;">
</head>
<body>
    <section>
        <div class="content">
            <div class="left-area">
                <div class="logos">
                <a href="/"><img src="img/logo.png" style="width:140px ;"></a>
                </div>
                <div class="title">
                    <h3>Sign Up & Temukan Partner <br> Untuk Push Project Bersama</h3>
                    <h6 style="margin-top:20px ;"><i class="fa-solid fa-rocket"></i> 1000+ Projects | <i class="fa-solid fa-people-group"></i> 2500+ Participan</h6>
                </div>
            </div>  

            <div class="right-area">
            <div class="login-box">
                <p>Sudah punya akun?<a href="/login" style="margin-left: 20px;text-decoration:none;font-weight:bold">Masuk</a></p> 
            </div>
                <div class="text-title">  
                    <h1>Mendaftar dengan gratis</h1>
                    <p>Buat Akun Baru</p>
                </div>
                <form action="/register" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"  placeholder="Full Name" required value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div> 
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"  placeholder="Enter email" required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div> 
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div> 
                    @enderror
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="check">
                    <label class="form-check-label" for="check">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</label>
                </div>
                    <button type="submit" class="btn btn-primary">Daftar Akun</button>
                </form>

            </div>
            
        </div>
        
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/870589c011.js" crossorigin="anonymous"></script>
</body>
</html>