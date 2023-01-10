@extends('navbar')
@section('body')
@section('navhome')
<a class="nav-link active" aria-current="page" href="/admin">Home</a>
@endsection
@section('item0')
<a class="nav-link" href="/adminSearch">Search</a>
@endsection
@section('addItem')
<a class="nav-link" href="#">Add Item</a>
@endsection

@section('logoutItem')
<div>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Sign Out</button>
    </form>
</div>
@endsection

<div class="admin">
    <div class="text-profile">
        My Profile
    </div>
    <div class="text-admin">
        admin
    </div>
    <div>
        username : {{ $profile->username}}
        <br>
        {{$profile->email}}
        <br>
        Address : {{ $profile->address}}
        <br>
        Phone : {{ $profile->phone}}
    </div>
    <div>
        <a href="">edit password</a>
    </div>
</div>
@endsection
