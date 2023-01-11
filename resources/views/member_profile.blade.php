@extends('navbar')
@section('body')
@section('navhome')
<a class="nav-link active" aria-current="page" href="/member">Home</a>
@endsection
@section('item0')
<a class="nav-link" href="/memberSearch">Search</a>
@endsection
@section('item1')
<a class="nav-link" href="#">Cart</a>
@endsection
@section('item2')
<a class="nav-link" href="#">History</a>
@endsection
@section('logoutItem')
<div>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-info">Sign Out</button>
    </form>
</div>
@endsection

        @if (session()->has('updatedPassword'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('updatedPassword')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif


<div class="member">
    <div class="text-profile">
        My Profile
    </div>
    <div class="text-member">
        member
    </div>
    <div>
        username : {{ $profile->username}}
        <br>
        {{ $profile->email}}
        <br>
        Address : {{ $profile->address}}
        <br>
        Phone : {{ $profile->phone}}
    </div>
    <div>

        <a href="/editProfile" class="btn btn-primary">edit profile</a>
        <a href="/editPasswordM" class="btn btn-light" id="btn">edit password</a>
    </div>
</div>
@endsection
