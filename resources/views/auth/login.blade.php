@extends('layouts.auth')
@section('content')
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="{{ asset('auth-assets/images/undraw_remotely_2j6y.svg') }}" alt="Image" class="img-fluid">
      </div>
      <div class="col-md-6 contents">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="mb-4">
            <h3>Sign In</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
          </div>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group first">
              <input type="email" class="form-control" id="username" name="email" class="form-control" />
              <label class="form-label" for="username">User Email</label>
              @error('email')
              <span>
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>


            <div class="form-group last mb-4">
              <input type="password" name="password" class="form-control" id="password" class="form-control" />
              <label class="form-label" for="form2Example2">Password</label>
              @error('password')
              <span>
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            
            <div class="d-flex mb-5 align-items-center">
              <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <div class="control__indicator"></div>
              </label>
              
              <span class="ml-auto">
                  <!-- Simple link -->
                  @if (Route::has('password.request'))
                      <a class="btn-link forgot-pass" href="{{ route('password.request') }}">
                          {{ __('Forgot Your Password?') }}
                      </a>
                  @endif
              </span> 
            </div>

            <input type="submit" value="Log In" class="btn btn-block btn-primary">

            <div>
              <p class="pt-2 pb-2"> Create a new account
              <!-- Simple link -->
              @if (Route::has('register'))                                
                  <a class="btn-link" href="{{ route('register') }}">{{ __('Register New Account') }}</a>                               
              @endif
              </p>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection