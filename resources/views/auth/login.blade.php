

<x-guest-layout>

    <x-slot name="title">Lunebridge</x-slot>
    <!-- Navbar -->
    <nav class="navbar fixed-top" style="background-color: #196870; box-shadow: 0px 0px 20px 3px rgba(0, 0, 0, 0.537);">
        <div class="container py-1 ">
                <img  src="{{ asset('Image/lunebridge Logo.png') }}"
            alt="LUNEBRIDGE Logo"
            style="height: 70px; margin-right: 10px;">
       <span class="me-auto text-white fw-bold" style="font-size: 1.8rem;">LUNEBRIDGE</span>
        </div>
    </nav>

    <!-- Login Section -->
    <section class="vh-100 d-flex align-items-center" style="background-color: #fff8f5;">
        <div class="container">
            <div class="row mt-5 p-3 align-items-center">
                <!-- Image Section -->
                <div class="col-md-6 d-flex justify-content-center">
                    <figure style="box-shadow: 0px 0px 10px -1px #d4c6c0; border-radius: 10px; overflow: hidden;">
                        <img class='photo' src="https://images.pexels.com/photos/3762800/pexels-photo-3762800.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                             class="img-fluid w-100" alt="Login Image">
                    </figure>
                </div>

                <!-- Login Form -->
                <div class="col-md-6">
                    <div class="card py-5 border border-0" style="box-shadow: 0px 0px 10px -1px #d4c6c0; border-radius: 10px;">
                        <h3 class="text-center fw-bolder mb-3" style="color: #196870;">Login</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="mb-3 w-75 m-auto">
                                <label for="email" class="form-label fw-medium" style="color: #196870;">Email Address</label>
                                <input type="email" id="email" name="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       value="{{ old('email') }}" required autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-3 w-75 m-auto">
                                <label for="password" class="form-label fw-medium" style="color: #196870;">Password</label>
                                <input type="password" id="password" name="password"
                                       class="form-control @error('password') is-invalid @enderror" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Remember Me -->
                            <div class="form-check w-75 m-auto text-start mb-3">
                                <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                                <label class="form-check-label" for="remember_me" style="color: #196870;">Remember me</label>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center my-3">
                                <button class="btn px-4 mb-1 text-white rounded-pill" style="background-color: #196870;"
                                        type="submit">Login</button>
                            </div>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <!-- Forgot Password -->
                            @if (Route::has('password.request'))
                                <div class="text-center mt-4">
                                    <a class="text-sm" href="{{ route('password.request') }}" style="color: #196870;">
                                        Forgot your password?
                                    </a>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-2" style="background-color: #196870; color: #fff;">
        <div class="container text-center">
            <p>© Copyright Lunebridge University.<br>All Rights Reserved to Lunebridge University</p>
        </div>
    </footer>
</x-guest-layout>



