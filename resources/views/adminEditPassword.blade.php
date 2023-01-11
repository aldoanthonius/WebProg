@extends('navbar')
@section('body')
@section('navhome')
<a class="nav-link active" aria-current="page" href="/admin">Home</a>
@endsection
@section('item0')
<a class="nav-link" href="/adminSearch">Search</a>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<div class="row justify-content-center">
    @if (session()->has('failedUpdatePassword'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('failedUpdatePassword')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="col-md-5">
        <main class="form-register w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Update Password</h1>
            <form action="/editPasswordA" method="post">
                @csrf
              <div class="form-floating">
                <input type="password" name="old_password" class="form-control rounded-top @error('old_password') is-invalid @enderror"
                id="old_password" placeholder="Old Password" required >
                <label for="old_password">Old Password</label>
                @error('old_password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror"
                id="new_password" placeholder="new_password" required>
                <label for="new_password">New Password</label>
                @error('new_password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Save Update</button>
              <div>
                <br>
                <a href="/profileM" class="btn btn-danger" >Back</a>
              </div>
            </form>
@endsection
