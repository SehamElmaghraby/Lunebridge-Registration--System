
{{-- <x-guest-layout>
    <!-- Navbar -->
    <nav class="navbar fixed-top" style="background-color: #196870; box-shadow: 0px 0px 20px 3px rgba(0, 0, 0, 0.5);">
        <div class="container py-3 d-flex justify-content-between align-items-center">
            <h3 style="color: #fff;">college name</h3>
            <span style="color: #fff;"><i class="fa-solid fa-building-columns fa-2x"></i></span>
        </div>
    </nav>

    <!-- Login Section -->
    <section class="vh-100 py-5 d-flex align-items-center" style="background-color: #fff8f5;">
        <div class="container">
            <div class="row mt-5 p-3 d-flex align-items-center">
                <!-- Image Section -->
                <div class="col-md-6 mt-2">
                    <figure style="box-shadow: 0px 0px 10px -1px #d4c6c0; border-radius: 10px;">
                        <img src="https://images.pexels.com/photos/3762800/pexels-photo-3762800.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                             class="img-fluid w-100" alt="Login Image" style="border-radius: 10px;">
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
                                <label for="email" class="form-label fw-medium" style="color: #196870;">Email address</label>
                                <input type="email" id="email" name="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       placeholder="enter your email" value="{{ old('email') }}" required autofocus>
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
                                       class="form-control @error('password') is-invalid @enderror"
                                       placeholder="enter your password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Login Button -->
                            <div class="text-center my-3">
                                <button class="btn px-4 mb-1 text-white rounded-pill" style="background-color: #196870;"
                                        type="submit">login</button>
                            </div>

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
</x-guest-layout> --}}

<x-guest-layout>

    <x-slot name="title">Student Registration System</x-slot>
    <!-- Navbar -->
    <nav class="navbar fixed-top" style="background-color: #196870; box-shadow: 0px 0px 20px 3px rgba(0, 0, 0, 0.537);">
        <div class="container py-3 d-flex justify-content-between align-items-center">
            <h3 style="color: #fff;">college name</h3>
            <span style="color: #fff;"><i class="fa-solid fa-building-columns fa-2x"></i></span>
        </div>
    </nav>

    <!-- Login Section -->
    <section class="vh-100 d-flex align-items-center" style="background-color: #fff8f5;">
        <div class="container">
            <div class="row mt-5 p-3 align-items-center">
                <!-- Image Section -->
                <div class="col-md-6 d-flex justify-content-center">
                    <figure style="box-shadow: 0px 0px 10px -1px #d4c6c0; border-radius: 10px; overflow: hidden;">
                        <img src="https://images.pexels.com/photos/3762800/pexels-photo-3762800.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
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
            <p>© Copyright College Name.<br>All Rights Reserved Designed by BootstrapMade</p>
        </div>
    </footer>
</x-guest-layout>







{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
