@extends('layouts.auth')
@section('content')
    <div class="container">
        <div class="mb-3">
            <form action="{{route('password.update')}}" method="POST">
                @csrf

                <input type="hidden" name="token" value="{{$token}}">
                <br>
                <input type="email" class="form-control" name="email"  aria-describedby="emailHelpId" placeholder="Enter Your Email" value="{{$email ?? old('email')}}">
                <span class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
                <br>
                <input type="password" class="form-control" name="password" id="" aria-describedby="emailHelpId" placeholder="Enter New Password">
                <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                </span>
                <br>
                <input type="password" class="form-control" name="password_confirmation" id="" aria-describedby="emailHelpId" placeholder="Enter Confirm Password">
                <span class="text-danger">
                    @error('password_confirmation')
                        {{$message}}
                    @enderror
                </span>
                <br>
                <input type="submit" class="btn btn-success" value="Change Password">
            </form>
        </div>
    </div>
@endsection