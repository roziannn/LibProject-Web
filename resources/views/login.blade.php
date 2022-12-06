<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href='img/singlelogo.png' rel='shortcut icon' style="width:50%;">
</head>
<body style="background-image:url('img/log.png');">
    <section>
        <div class="content">
            <div class="left-area">
                <div class="logos">
                <a href="/"><img src="img/logo.png" style="width:140px ;"></a>
                </div>
            </div>  

            <div class="right-area">

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width:80% ;">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
            </div>
            @endif

            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:80% ;">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
            </div>
            @endif

                <div class="text-title">  
                    <h1>Let's Begin</h1>
                    <p>Masukan Email dan Password</p>
                </div>

                <form action="/login" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email"  name="email" class="form-control @error('email') is-invalid @enderror" id="email" required placeholder="Enter email" autofocus required value="{{ old ('email')}}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password"  required placeholder="Enter Password" required>
                        <p class="forgotpass" style="margin-top:10px;margin-left:364px;"><a href="/forgotpass">Lupa Password?</a></p>
                    </div>
                    <div class="log-btn">
                        <button type="submit" class="btn btn-primary">Masuk</a></button>
                    </div>
                </form>
                <div class="reg-btn">
                    <a href="/register"><button type="submit" class="btn btn-secondary">Daftar Akun</button></a>
                </div>

            </div>
            
        </div>
        
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/870589c011.js" crossorigin="anonymous"></script>
</body>
</html>