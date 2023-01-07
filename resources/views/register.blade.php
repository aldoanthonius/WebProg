@extends('navbar')


<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-register w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Sign Up</h1>
            <form action="/register" method="post">
                @csrf
              <div class="form-floating">
                <input type="text" name="username" class="form-control rounded-top @error('username') is-invalid @enderror"
                id="username" placeholder="name@example.com" required value="{{ old('username')}}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                id="email" placeholder="name@example.com" required value="{{ old('email')}}">
                <label for="floatingInput">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror"
                placeholder="Phone Number" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" maxlength="12"  title="Fourteen   digits code" required value="{{ old('phone')}}"/>
                <label>Phone Number <small>eg: 000000000000</small></label>
                @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="address" class="form-control rounded-bottom @error('address') is-invalid @enderror"
                id="address" placeholder="address" required value="{{ old('address')}}">
                <label for="address">Address</label>
                @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign Up</button>

            </form>
            <small class="d-block text-center mt-3">Already Registered? <a href="/login">Sign in Here</a></small>
        </main>

    </div>
</div>

