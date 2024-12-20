

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('image/cap.png') }}" type="image/x-icon">
    <title>Lunebridge</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Righteous&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Webfonts -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}">
</head>

<body>
    <nav class="fixed-top">
        <div class="container py-2 d-flex justify-content-between align-items-center">
            <div class="nav-text d-flex align-items-center">
                <img src="{{ asset('Image/lunebridge Logo.png') }}"
                     alt="LUNEBRIDGE Logo"
                     style="height: 70px; margin-right: 10px;">
                <span class="text-white fw-bold" style="font-size: 1.8rem;">LUNEBRIDGE</span>
            </div>
            <div class="nav-icon">
                <span><i class="fa-solid fa-building-columns fa-2x"></i></span>
            </div>
        </div>
    </nav>

    {{-- <section class="vh-100">
        Empty section for future use
    </section> --> --}}

    <div id="section-details" class="py-5">
        <div class="container d-flex justify-content-center align-items-center h-100">
            <form class="row py-5 gy-4 z-3 w-75" id="register" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-pencil me-4 fs-3 fa-spin"></i>
                    <h1 class="text-center">Register Your Information</h1>
                    <i class="fa-solid fa-pencil ms-4 fs-3 fa-spin"></i>
                </div>
                <div class="col-md-6">
                    <div class="section-input">
                        <label for="username" class="form-label fw-bolder">First Name</label>
                        <input type="text" class="form-control" id="username" name="first_name" placeholder="First Name" required autofocus>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-input">
                        <label for="lastname" class="form-label fw-bolder">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="last_name" placeholder="Last Name" required>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-input">
                        <label for="email" class="form-label fw-bolder">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-input">
                        <label for="studentid" class="form-label fw-bolder">Student ID</label>
                        <input type="text" class="form-control" id="studentid" name="student_id" placeholder="Student ID" required autofocus>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-input">
                        <label for="password" class="form-label fw-bolder">Password</label>
                        <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password" required autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-input">
                        <label for="password_confirmation" class="form-label fw-bolder">Re-Password</label>
                        <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="Re-enter your password" required autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>
                <div class="col-12">
                    <p class="text-center text-danger py-3" id="paragraph"></p>
                    <div class="text-center mt-4">
                        <button class="btn slide-in rounded-pill text-center w-50" type="submit">{{ __('Register') }}</button>
                    </div>
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
        </div>
    </div>

    <footer  class="py-2">
        <div class="container">
            <div class="footer-text text-center my-2">
                <p>© Copyright Lunebridge University.
                    <br>
                    All Rights Reserved to Lunebridge University.
                </p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/registration.js') }}"></script>
</body>

</html>
