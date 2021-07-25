<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KeepHealthy</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('Template/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('Template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('Template/dist/css/adminlte.min.css')}}">

    <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('css/responsive.css') }}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

        <!-- LoginBaru -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('/masuk/fonts/icomoon/style.css') }}">

<link rel="stylesheet" href="{{asset ('/masuk/css/owl.carousel.min.css') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('/masuk/css/bootstrap.min.css') }}">

<!-- Style -->
<link rel="stylesheet" href="{{asset('/masuk/css/style.css') }}">

</head>
<body>

<div class="loader_bg">
        <div class="loader"><img src="{{asset('images/loading.gif')}}" alt="#" /></div>
    </div>

<div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bersih.jpg'); background-size:100% 100%; background-repeat: no-repeat;"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="mb-4">
              <h3>Register</h3>
              <p class="mb-4">Selamat Datang</p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                    @csrf
              <div class="form-group first">
                <label for="name">Nama</label>
                <input id="name" name="name" type="text" class="form-control"value="{{ old('name') }}" required autocomplete="name"
                            autofocus>
                <!-- <span class="fas fa-envelope"></span> -->
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" class="form-control"value="{{ old('email') }}" required autocomplete="email"
                            autofocus>
                <!-- <span class="fas fa-envelope"></span> -->
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input id="alamat" name="alamat" type="text" class="form-control"value="{{ old('alamat') }}"  required autocomplete="alamat"
                            autofocus>
                <!-- <span class="fas fa-envelope"></span> -->
                                @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
              </div>
              <div class="form-group">
                <label for="nomor">Nomor</label>
                <input id="nomor" name="nomor" type="number" class="form-control"value="{{ old('nomor') }}" required autocomplete="nomor"
                            autofocus>
                                @error('nomor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" id="password" name="password" required autocomplete="new-password"> 
                <!-- <span class="fas fa-lock"></span> -->
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
              </div>
              <div class="form-group last mb-3">
                <label for="password-confirm">Konfirmasi Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> 
            
              </div>
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        

              <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span>
              
              <div class="social-login">
                <a href="{{ route('login') }}" class="facebook btn d-flex justify-content-center align-items-center">
                  <span class="icon-user mr-3"></span> Login
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- <body class="hold-transition login-page">
    <div class="login-box"> -->
        <!-- /.login-logo -->
        <!-- <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h2"><b>Register</b>User</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Selamat Datang</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="input-group mb-3">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" placeholder="Nama" required autocomplete="name"
                            autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"
                            name="alamat" value="{{ old('alamat') }}" placeholder="Alamat" required
                            autocomplete="alamat">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-home"></span>
                                @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input id="nomor" type="number" class="form-control @error('nomor') is-invalid @enderror"
                            name="nomor" value="{{ old('nomor') }}" placeholder="Nomor" required autocomplete="nomor">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-phone"></span>
                                @error('nomor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            placeholder="Password" required autocomplete="new-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            placeholder="Konfirmasi Password" required autocomplete="new-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember"> -->

                            <!-- </div>
                        </div> -->
                        <!-- /.col -->
                        <!-- <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div> -->
                        <!-- /.col -->
                    <!-- </div> -->



                    <!-- /.social-auth-links -->

<!-- 
                    <p class="mb-0">
                        <a href="{{ route('login') }}" class="text-center">Login</a>
                    </p>
            </div> -->
            <!-- /.card-body -->
        <!-- </div> -->
        <!-- /.card -->
    <!-- </div> -->
    <!-- /.login-box -->


     <!-- Scirpt loginbaru -->
     <script src="{{ asset('/masuk/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{asset('/masuk/js/popper.min.js') }}"></script>
    <script src="{{asset('/masuk/js/bootstrap.min.js')}}"></script>
    <script src="{{asset(/masuk/js/main.js') }}"></script>

    <!-- jQuery -->
    <script src="{{ asset('/Template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('/Template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('/Template/dist/js/adminlte.min.js')}}"></script>

    <script src="{{asset('/js/popper.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('/js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{asset('/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('/js/custom.js')}}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>