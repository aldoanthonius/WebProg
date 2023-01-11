@extends('navbar')
@section('body')
@section('navhome')
<a class="nav-link active" aria-current="page" href="/member">Home</a>
@endsection
@section('item0')
<a class="nav-link" href="/memberSearch">Search</a>
@endsection
@section('item1')
<a class="nav-link" href="/cart">Cart</a>
@endsection
@section('item2')
<a class="nav-link" href="#">History</a>
@endsection
@section('item3')
<a class="nav-link" href="/profileM">Profile</a>
@endsection
@section('logoutItem')
<div>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-info">Sign Out</button>
    </form>
</div>
@endsection

<div
    class="container-fluid"
    style="display: flex; justify-content: center">
    <div
        class="card m-4 justify-content-center bg-light"
        style="flex-direction: row; width: 90%; max-width: 1200px">
        <div
            class="card m-4 bg-light"
            style="width: 20%">
            <img
                class="card-img-top"
                src="{{$product->image}}"
                alt="Image Not Found"
                style="width: 100%; height:100%">
        </div>
        <div
            class="card m-4 bg-light"
            style="width: 80%; padding: 1em">
            <h3 class="card-title">{{ $product->name }}</h3>
            <h5 class="card-text">Rp {{number_format($product->price,0, ',')}}</h5>
            <hr>
        </div>
    </div>
</div>

@endsection
