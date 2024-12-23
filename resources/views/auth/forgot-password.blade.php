<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Navbar -->
    {{-- <nav class="fixed-top">
        <div class="container py-3 d-flex justify-content-between align-items-center">

            <div class="d-flex align-items-center">
                <img src="{{ asset('Image/lunebridge Logo.png') }}"
                     alt="LUNEBRIDGE Logo"
                     style="height: 70px; margin-right: 10px;">
                <span class="text-white fw-bold" style="font-size: 1.8rem;">LUNEBRIDGE</span>
            </div>

        </div>
    </nav> --}}
    <!-- End Navbar -->
    <section class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
                <div class="card w-75 m-auto " >
            <div class="card-body">
              <h5 class="card-title pt-4 text-center fw-bolder" style="color: #196870; font-size: 1.7rem;">Enter Your Email</h5>
              <div class="section-input pb-5">

    <form  method="POST" action="{{ route('password.email') }}">
        @csrf

   <!-- Email Address -->
<div>
    <x-input-label class="form-label fw-bolder text-white" for="email" :value="__('Email Address')" />
    <x-text-input
        id="email"
        class="form-control mt-1 w-full"
        type="email"
        name="email"
        :value="old('email')"
        placeholder="Enter your email"
        required
        autofocus
    />
    {{-- <x-input-error :messages="$errors->get('email')" class="text-center text-danger pt-3" /> --}}
        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm font-medium" />

</div>

<div class="text-center my-3">
    <x-primary-button class="btn px-4 w-25 mb-1 text-white rounded-pill">
        {{-- {{ __('Login') }} --}}
        {{ __('Email Password Reset') }}
    </x-primary-button>
</div>
    </form>
</div>
</div>
</div>
</div>

</section>
<footer class="py-3">
    <div class="container">
        <div class="footer-text text-center my-2">
            <p>© Copyright Lunebridge University .
                <br>
                All Rights Reserved to Lunebridge University.
            </p>
        </div>
    </div>
</footer>

</x-guest-layout>
