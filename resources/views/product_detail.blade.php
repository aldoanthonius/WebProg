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
<a class="nav-link" href="/transaction_history">History</a>
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
        style="flex-direction: row; width: 90%; max-width: 1200px; padding: 2em">
        <div
            class="card bg-light"
            style="width: 20%; margin-right: 1em">
            <img
                class="card-img-top"
                src="{{$product->image}}"
                alt="Image Not Found"
                style="width: 100%">
        </div>
        <div
            class="card bg-light"
            style="width: 80%; padding: 1em; margin-left: 1em">
            <h3 class="card-title">{{ $product->name }}</h3>
            <h5 class="card-text">Rp {{number_format($product->price,0, ',')}}</h5>
            <hr>
            <h5 class="card-text">Product Detail</h5>
            <p class="card-text">{{ $product->description }}</p>
            <hr>
            <form action="/addToCart" method="POST">
                @csrf
                <h3 class="card-text">Quantity:</h3>
                <input
                    type="hidden"
                    name="id"
                    value={{$product->id}}>
                <div
                    style="display: flex; flex-direction: row; margin-top: 1em">
                    <input
                        class="form-control"
                        type="number"
                        name="quantity"
                        style="width: 50%; margin-right: 0.5em"
                        min=1
                        value=1>
                    <button
                        class="btn btn-success"
                        style="width: 50%; margin-left: 0.5em">
                        Add To Cart
                    </button>
                </div>
                @if ($errors->any())
                <div
                    class="alert alert-danger"
                    style="margin-top: 1em">
                    {{$errors->first()}}
                </div>
                @endif
            </form>
            <a
                href="/member"
                class="btn btn-danger"
                style="margin-top: 1em">
                Back
            </a>
        </div>
    </div>
</div>

@endsection
