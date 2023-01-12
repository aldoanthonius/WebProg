@extends('navbar')
@section('body')
@section('navhome')
<a class="nav-link active" aria-current="page" href="/member">Home</a>
@endsection
@section('item1')
<a class="nav-link" href="/cart">Cart</a>
@endsection
@section('item2')
<a class="nav-link" href="/transaction_history">History</a>
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
            <h1 class="h3 mb-3 fw-normal text-center">Update Profile</h1>
            <form action="/profileM" method="post">
                @csrf
              <div class="form-floating">
                <input type="text" name="username" class="form-control rounded-top @error('username') is-invalid @enderror"
                id="username" placeholder="name@example.com" required value="{{ old('username', Auth::user()->username) }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                id="email" placeholder="name@example.com" required value="{{ old('email', Auth::user()->email)}}">
                <label for="floatingInput">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror"
                placeholder="Phone Number" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" maxlength="12"  title="Fourteen   digits code" required value="{{ old('phone', Auth::user()->phone)}}"/>
                <label>Phone Number <small>eg: 000000000000</small></label>
                @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="address" class="form-control rounded-bottom @error('address') is-invalid @enderror"
                id="address" placeholder="address" required value="{{ old('address', Auth::user()->address) }}">
                <label for="address">Address</label>
                @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Save Update</button>

            </form>
            <a href="/profileM" class="btn btn-danger">back</a>
        </main>

    </div>
</div>



@endsection


