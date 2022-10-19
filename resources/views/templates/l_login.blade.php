<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>MAJAPAHIT.ID</title>
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <!-- Navigation-->
              <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
                  <div class="container px-4 px-lg-5">
                      <a class="navbar-brand font-weight-bold" href="/">MAJAPAHIT</a>
                      <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                      <div class="collapse navbar-collapse" id="navbarResponsive">
                          <ul class="navbar-nav ms-auto my-2 my-lg-0">
                              <li class="nav-item"><a class="nav-link" href="/register">Registrasi</a></li>
                          </ul>
                      </div>
                  </div>
              </nav>
            <header class="masthead" id="login">
                <div class="container px-4 px-lg-5 h-50">
                    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                        <div class="col-md-8">
                    <h1 class="h3 mb-5 fw-normal text-light text-center">Please Log In</h1>
            
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
            
                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 text-light col-form-label text-md-end">{{ __('Email Address') }}</label>
            
                                        <div class="col-xl-8">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 text-light col-form-label text-md-end">{{ __('Password') }}</label>
            
                                        <div class="col-xl-8">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="row mb-3">
                                        <div class="col-md-6 offset-md-2">
                                            <div class="form-check">
                                                <input class="text-lightform-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                                                <label class="text-light form-check-label " for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="row mb-0">
                                        <div class="col-md offset-md-2">
                                            <button type="submit" class="btn-xl btn-primary">
                                                {{ __('Login') }}
                                            </button>
            
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
        </header>
    </body>
    </body>
</html>