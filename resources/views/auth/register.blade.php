@extends('layouts.auth')
@section('content')
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-6 d-flex align-items-end">
        <img src="{{ asset('auth-assets/images/signUP.webp') }}" alt="Image" class="img-fluid">
      </div>
      <div class="col-md-6 contents">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="mb-4">
            <h3>Sign Up</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
          </div>
          <form method="POST" action="{{ route('register') }}">
            @csrf

            @if(Session::get('success'))
              <div class="alert alert-success">
                {{ Session::get('success') }}
              </div>
            @endif

            @if(Session::get('error'))
              <div class="alert alert-success">
                {{ Session::get('error') }}
              </div>
            @endif
            

            {{-- Name input --}}
            <div class="form-group first">
              <input type="text" name="name" id="registerName" class="form-control" autofocus value="{{old('name')}}" />
              <label class="form-label" for="registerName">Name</label>
              @error('name')
                  <span >
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            {{-- Favorite Color --}}
            <div class="form-group">
              <input id="favoritecolor" class="form-control" type="text" name="favoritecolor"  value="{{old('favoritecolor')}}" />
              <label class="form-label" for="favoritecolor">Favorite color</label>
              @error('favoritecolor')
                  <span >
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            {{-- Email input --}}
            <div class="form-group">
              <input type="email" name="email" id="registerEmail" class="form-control"  value="{{old('email')}}" />
              <label class="form-label" for="registerEmail">Email</label>

              @error('email')
                  <span>
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
      
            {{-- Password input --}}
            <div class="form-group">
              <input type="password" id="registerPassword" class="form-control" name="password" value="{{old('password')}}" />
              <label class="form-label" for="registerPassword">Password</label>
              @error('password')
                  <span>
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
      
            {{-- Repeat Password input --}}
            <div class="form-group">
              <input type="password" id="registerRepeatPassword" class="form-control" name="password_confirmation"  value="{{old('password_confirmation')}}" />
              <label class="form-label" for="registerRepeatPassword">Repeat password</label>
              @error('password_confirmation')
                  <span>
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
      
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary mt-3" style="width: 100%;">Register In</button>

            <div>
              <p class="pt-2 pb-2"> You Already have an existing account ?
              <!-- Simple link -->
              @if (Route::has('login'))                                
                  <a class="btn-link" href="{{ route('login') }}">{{ __('login') }}</a>                               
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