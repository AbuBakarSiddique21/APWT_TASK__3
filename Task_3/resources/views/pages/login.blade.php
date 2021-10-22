@extends('layouts.app')
@section('content')
    <form action="{{route('login')}}" class="col-md-7" method="post">
        {{csrf_field()}}
        
        <div class="col-md-6 form-group">
            <span>Username</span>
            <input type="text" name="username" value="{{old('username')}}"class="form-control">
            @error('username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 form-group">
            <span>Password</span>
            <input type="password" name="password" value="{{old('password')}}"class="form-control">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Login" >
    </form>
@endsection