@extends('navbar')
@section('body')
@section('navhome')
<a class="nav-link active" aria-current="page" href="/admin">Home</a>
@endsection
@section('item0')
<a class="nav-link" href="/adminSearch">Search</a>
@endsection
@section('addItem')
<a class="nav-link" href="/adminAddItem">Add Item</a>
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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@if (session()->has('addingItem'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('addingItem')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
<div class="row row-cols-1 row-cols-md-4 g-4 m-2">

    @foreach($products as $product)
        <div class="col">
            <div class="card h-100 text-white text-center bg-dark mb-3" style="width: 90%">
                <img class="card-img-top" src="{{ asset('storage/' . $product->image) }}" alt="Image Not Found" style="width: 100%; height:70%">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">Rp {{number_format($product->price,0, ',')}}</p>
                    <a href="" class="btn btn-primary">More Detail</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="m-5 d-flex justify-content-center">
    {{ $products->withQueryString()->links() }}
</div>
@endsection
