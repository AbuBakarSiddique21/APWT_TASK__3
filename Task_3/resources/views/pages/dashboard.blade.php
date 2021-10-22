@extends('layouts.app')
@section('content')
@if(Session::has('admin'))
<center><h3>Welcome Admin</h3></center>
<h3>UserID: {{Session()->get('adminId')}}</h3><hr>
<h3>Name: {{$admin->name}}</h3><hr>
<h3>Email: {{$admin->email}}</h3><hr>
<h3>Username: {{Session()->get('admin')}}</h3><hr>
<h3>Phone: {{$admin->phone}}</h3><hr>
<h3>Date Of Birth: {{$admin->dob}}</h3><hr>
<h3>Gender: {{$admin->gender}}</h3><hr>
<a class="btn btn-primary" href="{{route('editAdminInfo')}}"> Update </a> 
@endif
@if(Session::has('employer'))
<center><h3>Welcome Employer Section</h3></center>
<h3>UserID: {{$employer->id}}</h3><hr>
<h3>Name: {{$employer->name}}</h3><hr>
<h3>Email: {{$employer->email}}</h3><hr>
<h3>Username: {{Session()->get('employer')}}</h3><hr>
<h3>Phone: {{$employer->phone}}</h3><hr>
<h3>Date Of Birth: {{$employer->dob}}</h3><hr>
<h3>Gender: {{$employer->gender}}</h3><hr>
<a class="btn btn-primary" href="{{route('editEmployerInfo')}}"> Update </a> 
@endif
@endsection