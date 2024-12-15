<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('image/cap.png') }}" type="image/x-icon">
    <title>Student Registration System</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Righteous&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Webfonts -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="fixed-top">
        <div class="container py-3 d-flex justify-content-between align-items-center">
            <div class="nav-text">
                <h3>College Name</h3>
            </div>
            <div class="nav-icon">
                <span><i class="fa-solid fa-building-columns fa-2x"></i></span>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Home Section -->
    <section class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="section-text text-center w-75 m-auto pt-5">
                <!-- Apply the slide-in class to <h1> and <p> -->
                <h1 class="pt-5 slide-in fw-bolder" style="font-size: 2.7rem;">Online Student Registration System</h1>
                <p class="lh-base fw-medium py-4 slide-in" style="font-size: 1.5rem;">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('login') }}">
                    <button class="btn mx-2 slide-in rounded-pill text-center w-25" type="submit">Login</button>
                </a>
                <a href="{{ route('register') }}">
                    <button class="btn mx-2 slide-in rounded-pill text-center w-25" type="submit">Register</button>
                </a>
            </div>
        </div>
    </section>
    <!-- End Home Section -->

    <footer class="py-2">
        <div class="container">
            <div class="footer-text text-center my-2">
                <p>© Copyright College Name.
                    <br>
                    All Rights Reserved Designed by BootstrapMade
                </p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
