@extends('navbar')
@section('navhome')
<a class="nav-link active" aria-current="page" href="/member">Home</a>
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
        <button type="submit" class="btn btn-danger">Sign Out</button>
    </form>
</div>
@endsection
