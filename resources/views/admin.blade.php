@extends('navbar')
@section('navhome')
<a class="nav-link active" aria-current="page" href="/admin">Home</a>
@endsection
@section('addItem')
<a class="nav-link" href="#">Add Item</a>
@endsection
@section('item3')
<a class="nav-link" href="/profileA">Profile</a>
@endsection
@section('logoutItem')
<div>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Sign Out</button>
    </form>
</div>
@endsection
