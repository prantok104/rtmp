<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo.png') }}" />
    {{-- Boostrap css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">
    {{-- Fontawesome css --}}
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    {{-- App css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>
    {{-- Login area start --}}
    <div class="login-area-start">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="login-area-content">
                        <div class="login-form-area">
                            <div class="login-header-content text-center">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="" width="65" class="rounded-circle">
                                <h3 class="text-white">Sign In</h3>
                            </div>
                            <form action="" method="post">
                                <div class="form-group animate-label">
                                    <input type="email" name="email" id="email"
                                        class="form-control mt-2  @error('email') is-invalid @enderror" placeholder=" "
                                        autocomplete="false">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong> <i class="fal fa-exclamation-triangle"></i> {{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group animate-label">
                                    <input type="password" name="password" id="password" placeholder=" "
                                        class="form-control @error('password') is-invalid @enderror" autocomplete="off">
                                    <label for="password">Password <span class="text-danger">*</span></label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary login-btn">SIGN IN</button>
                                </div>
                                <div class="strike mt-3">
                                    <span>OR</span>
                                </div>

                                <div class="social-login">
                                    <a href="#"><i class="fab fa-facebook-f"></i> Sign in with Facebook</a>
                                    <a href="#" style="background: #FF5722"><i class="fab fa-google" style="color: #FF5722"></i> Sign in with Google</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Login area end --}}


    {{-- jQuery --}}
    <script src="{{ asset('assets/js/jQuery.min.js') }}"></script>
    {{-- Boostrap bundle --}}
    <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>
