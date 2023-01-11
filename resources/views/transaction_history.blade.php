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


<div class="container-fluid">
    <div
        class="d-flex align-items-center justify-content-center"
        style="height: 8em">
        <h2
            class="text-center"
            style="color: #000000">
            Check What You've Bought!
        </h2>
    </div>
</div>

<div
    class="container-fluid"
    style="display: flex; justify-content: center; flex-direction: column">
    <ul>
        @foreach ($arr_transactions as $transaction)
        <li
            class="card bg-light"
            style="padding: 2em; margin: 1em">
            <h5 class="card-title">{{$transaction['date']}}</h5>
            <ul>
                @foreach ($transaction['details'] as $item)
                <li>
                    <p class="card-title">
                        {{$item['quantity']}} pc(s) {{$item['product']}}: Rp {{number_format($item['price'], 0, ',')}}
                    </p>
                </li>
                @endforeach
            </ul>
            <h5 class="card-text">Total Price: Rp {{number_format($transaction['price'], 0, ',')}}</h5>
        </li>
        @endforeach
    </ul>
</div>

@endsection
