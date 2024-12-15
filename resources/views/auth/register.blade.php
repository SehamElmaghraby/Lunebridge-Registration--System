<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="student_id" placeholder="Enter Student ID" required>
            <input type="text" name="name" placeholder="Enter Full Name" required>
            <input type="email" name="email" placeholder="Enter Email Address" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form> --}}


        <!-- Name -->
        {{-- <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div> --}}

         <!-- First Name -->
    <div>
        <label for="first_name">First Name</label>
        <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" required autofocus />
    </div>

    <!-- Last Name -->
    <div>
        <label for="last_name">Last Name</label>
        <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required />
    </div>

    <input type="text" name="student_id" placeholder="Enter Student ID" required>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mb-3">
            <label for="year_of_enrollment" class="form-label">Year of enrollment</label>
            <input type="number" name="year_of_enrollment" id="year_of_enrollment" class="form-control" required>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
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

    </form>
</x-guest-layout>
