@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ingresar') }}</div>

                <main class="">
    <div class="">
      <div class="card login-card">
        <div class="row no-gutters">
        <img src="/img/logo2.jpg" alt="login" class="login-card-img">
          <div class="col-md-5">
            
            
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                
              </div>
              <p class="login-card-description" style="color:#fff">Ingrese su email</p>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>                    
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email address" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="***********" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                </form>
                
                </nav>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </main>

                
            </div>
        </div>
    </div>
</div>
@endsection
