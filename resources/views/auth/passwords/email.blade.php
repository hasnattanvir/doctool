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
            <h3>Verify Link</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
          </div>

           <form method="POST" novalidate="" action="{{ route('password.email') }}">
            @csrf
            @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}    
                <div>
            @endif

            <div class="form-group first">
              <input type="email" class="form-control" name="email" value="{{old('email')}}">
              <label class="form-label" for="registerName">Enter Your Email</label>
              <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span>
            </div>

            <div class="mt-3">
              <input type="submit" value="Send Password Link" class="btn btn-secondary btn-primary">
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection