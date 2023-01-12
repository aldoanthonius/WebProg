<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-register w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Sign Up</h1>
            <form action="/register" method="post">
                @csrf

              <div class="form-label">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control rounded-top @error('username') is-invalid @enderror"
                id="username" placeholder="name@example.com" required value="{{ old('username')}}">
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-label">
                <label for="floatingInput">Email address</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                id="email" placeholder="name@example.com" required value="{{ old('email')}}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-label">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                id="password" placeholder="Password" required>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-label">
                <label>Phone Number <small>eg: 000000000000</small></label>
                <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror"
                placeholder="Phone Number" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" maxlength="12"  title="Fourteen   digits code" required value="{{ old('phone')}}"/>
                @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-label">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control rounded-bottom @error('address') is-invalid @enderror"
                id="address" placeholder="address" required value="{{ old('address')}}">
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

