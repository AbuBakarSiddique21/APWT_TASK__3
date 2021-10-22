@extends('layouts.app')
@section('content')
    
    <form action="{{route('signup')}}" class="col-md-6" method="post">
        {{csrf_field()}}
        <div>
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <br>
        <div>
            <span>Email</span>
            <input type="text" name="email" value="{{old('email')}}"class="form-control">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>
        <div>
            <span>Phone</span>
            <input type="text" name="phone" value="{{old('phone')}}"class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>
        <div>
            <span>Username</span>
            <input type="text" name="username" value="{{old('username')}}"class="form-control">
            @error('username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>
        <div>
            <span>Password</span>
            <input type="password" name="password" value="{{old('password')}}"class="form-control">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>
        <div>
            <span>Confirm Password</span>
            <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control">
            @error('password_confirmation')
            <span class="text-danger">{{$message}}</span>
             @enderror
        </div><br>
        <div>
            <span>Date of Birth</span>
            <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
            @error('dob')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>
        <div>
            <span>Gender</span><br>
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="Other">
            <label for="other">Other</label><br>
            @error('gender')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="Signup">
    </form>
@endsection