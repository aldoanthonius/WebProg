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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-register w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Add Item</h1>
            <form enctype="multipart/form-data" action="/adminAddItem" method="post">
                @csrf
              <div class="form-label">
                <label for="clothesImage" class="form-label">Clothes Image</label>
                <input name="clothesImage" class="form-control" type="file" id="formFile">
              </div>

              <div class="form-label">
                <label for="clothesName">Clothes Name</label>
                <input type="text" name="clothesName" class="form-control @error('clothesName') is-invalid @enderror"
                id="clothesName"  required value="{{ old('clothesName')}}">
                @error('clothesName')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-label">
                <label for="clothesDesc">Clothes Desc</label>
                <input type="text" name="clothesDesc" class="form-control @error('clothesDesc') is-invalid @enderror"
                id="clothesDesc"  required value="{{ old('clothesDesc')}}">
                @error('clothesDesc')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-label">
                <label for="clothesPrice">Clothes Price</label>
                <input type="number" name="clothesPrice" class="form-control @error('clothesPrice') is-invalid @enderror"
                id="clothesPrice"  required value="{{ old('clothesPrice')}}">
                @error('clothesPrice')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-label">
                <label for="clothesStock">Clothes Stock</label>
                <input type="number" name="clothesStock" class="form-control @error('clothesStock') is-invalid @enderror"
                id="clothesStock"  required value="{{ old('clothesStock')}}">
                @error('clothesStock')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <button class="btn btn-danger" type="submit">Add</button>

            </form>
        </main>
@endsection

