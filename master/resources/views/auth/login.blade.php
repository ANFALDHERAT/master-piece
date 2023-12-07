<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .divider:after,
       .divider:before {
       content: "";
       flex: 1;
       height: 1px;
       background: #eee;
       }
       .h-custom {
       height: calc(100% - 73px);
       }
       @media (max-width: 450px) {
       .h-custom {
       height: 100%;
       }
       }

           </style>


</head>
  <body>
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="{{ asset('assets1/images/mac.jpg')}}"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

                {{-- <h1 class="text-center" style="color:#F8796C ">AYSEL</h1> --}}
        <!-- AYSEL Name -->

        <!-- Session Status -->
        <div class="mb-4 text-center text-green-600">
            {{ session('status') }}
        </div>

        <form method="POST" action="{{ route('login') }}" class="mt-4">
            @csrf

            <!-- Email Address -->
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                {{-- <button type="button" class="btn btn-warning btn-floating mx-1">
                  <i class="bi bi-facebook" style="color: white"></i>
                </button> --}}

                <a href="{{ route('google-auth') }}"> <button type="button" class="btn  btn-floating mx-1" style="background-color:#F8796C ">
                  <i class="bi bi-google" style="color: white; "></i>
              </button></a>

                {{-- <button type="button" class="btn btn-warning btn-floating mx-1">
                  <i class="bi bi-linkedin" style="color: white"></i>
                </button> --}}
              </div>

              <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0">Or</p>
              </div>

            <div class="form-outline mb-4">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="form-control form-control-lg">
                @if ($errors->has('email'))
                    <p class="text-red-500 text-xs italic mt-1">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <!-- Password -->
            <div class="form-outline mb-4">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control form-control-lg">
                @if ($errors->has('password'))
                    <p class="text-red-500 text-xs italic mt-1">{{ $errors->first('password') }}</p>
                @endif
            </div>

            <!-- Remember Me -->
            <div class="d-flex justify-content-around align-items-center mb-4">
                <!-- Checkbox -->
                <div class="form-check">
                <input id="remember_me" type="checkbox" name="remember" class="form-check-input">
                <label for="remember_me"  class="form-check-label">Remember me</label>
            </div>


                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-indigo-600 hover:text-indigo-800" style="color:#F8796C ">Forgot your password?</a>
                @endif
            </div>
                <button type="submit" class="btn  btn-lg btn-block" style="background-color:#F8796C ;color:white">Log in</button>
                <div class="divider d-flex align-items-center my-4">
                    {{-- <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p> --}}
                  </div>


                  {{-- <a class="btn btn-primary btn-lg btn-block" style="background-color:green" href="{{ route('google-auth') }}"
                    role="button">
                    <i class="fab fa-google me-2"></i>Continue with Google</a> --}}


        </form>
    </div>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
