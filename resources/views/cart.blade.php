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

<div>
    <div class="container-fluid">
        <div
            class="d-flex align-items-center justify-content-center"
            style="height: 8em">
            <h2
                class="text-center"
                style="color: #000000">
                My Cart
            </h2>
        </div>
    </div>
    <div class="container-fluid">
        <div
            class="d-flex align-items-center"
            style="justify-content: flex-end">
            <h4
                class="text-center"
                style="color: #000000">
                Total Price: Rp {{number_format($total_price, 0, ',')}}
            </h4>
            <form
                action=""
                method="POST"
                style="padding: 1em">
                <a
                    href=""
                    class="btn btn-primary"
                    type="submit">
                    Check Out({{count($cart)}})
                </a>
            </form>
        </div>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-4 g-4 m-2">
    @foreach($cart as $key => $entry)
        <div class="col">
            <div class="card h-100 text-black  bg-light mb-3" style="width: 90%">
                <img class="card-img-top" src="{{$entry['product']->image}}" alt="Image Not Found" style="width: 100%; height:70%">
                <div class="card-body">
                    <h5 class="card-title">{{ $entry['product']->name }}</h5>
                    <p class="card-text">Rp {{number_format($entry['product']->price,0, ',')}}</p>
                    <p class="card-text">Qty: {{$entry['qty']}}</p>
                    <div class="container-fluid">
                        <a href="" class="btn btn-primary">
                            Edit Cart
                        </a>
                        <form action="/removeFromCart" method="POST">
                            @csrf
                            <input
                                type="hidden"
                                name="id"
                                value={{$entry['product']->id}}>
                            <button class="btn btn-danger">
                                Remove from Cart
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
