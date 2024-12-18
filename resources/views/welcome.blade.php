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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="fixed-top">
        <div class="container py-3 d-flex justify-content-between align-items-center">
            {{-- <img src="{{ asset('Image/lunebridge Logo.png') }}" alt="LUNEBRIDGE Logo"
            style="height: 70px;">
            <h3 >LUNEBRIDGE UNI</h3>
            <div class="nav-text">

            </div> --}}

            <div class="d-flex align-items-center">
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
    <!-- End Navbar -->

    <!-- Home Section -->
    <section class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="section-text text-center w-75 m-auto pt-5">
                <!-- Apply the slide-in class to <h1> and <p> -->
                <h1 class="pt-5 slide-in fw-bolder" style="font-size: 3rem;">LUNEBRIDGE</h1>
                <p class="lh-base fw-medium py-4 slide-in" style="font-size: 2rem;">Our mission is to empower students with knowledge and skills to excel in a rapidly evolving world,
                     fostering leadership and lifelong learning.</p>
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

 <!-- Our Story Section -->
<article class="py-5 vh-100" id="our-story" style="background-color: #e6e6e6;">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold" style="font-size: 3rem; color: #2c3e50;">OUR STORY</h2>
            <p class="lead w-75 mx-auto fw-medium" style="color: #0c3c41d8;">
                Discover our journey, our mission, and how we strive to shape a better future for every student.
            </p>
        </div>
        <div class="row align-items-center mt-5">
            <!-- Text Content -->
            <div class="col-md-6 mb-0 mb-md-0">
                <h3 class="fw-bold" style="color: #0c3c41;  font-size: 2rem; line-height:5rem">WHO WE ARE</h3>
                <p class="lh-base" style="color: #0c3c41; font-size: 1.4rem;">
                    At Gryffindor College, we inspire innovation and creativity through exceptional learning experiences.
                    Since 2005, we have provided students with the knowledge, tools, and confidence to excel academically and professionally.
                </p>
                <p class="lh-base" style="color: #0c3c41; font-size: 1.4rem;">
                    With a team of expert faculty and a vibrant campus community, we aim to nurture talent, leadership, and a commitment to lifelong learning.
                </p>
            </div>
            <!-- Box Instead of Image -->
            <div class="col-md-6 ">
                <div id="boxy" class="rounded p-5" style=" box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                    <h4 class="fw-bold mb-3" style="color: #ececed;">"Building Dreams Together"</h4>
                    <p style="color: #dbd4d4; font-size: 1rem;">
                        Our mission is to empower students to dream big, work hard, and achieve their goals.
                    </p>
                </div>
            </div>
        </div>
    </div>
</article>

<!-- Contact Us Section -->
<main id="contact" class="py-5" style="background-color: #f0f0f0;">
    <div class="container">
        <!-- Section Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: #196870; font-size: 3rem;">Contact Us</h2>
            <p class="lead" style="color: #555;">We're here to help! Reach out to us anytime.</p>
        </div>

        <!-- Contact Details -->
        <div class="row justify-content-center text-center">
            <!-- Address and Contact Info -->
            <div class="col-md-4 mb-4 me-5">
                <h4 class="fw-bold mb-3" style="color: #196870; font-size: 2rem;">Our Address</h4>
                <p style="color: #555; font-size: 1.5rem;">
                    <i class="fa-solid fa-location-dot me-2"></i> 123 College Street, City, Country
                </p>
                <p style="color: #555; font-size: 1.5rem;">
                    <i class="fa-solid fa-phone me-2"></i> +1 (123) 456-7890
                </p>
                <p style="color: #555; font-size: 1.5rem;">
                    <i class="fa-solid fa-envelope me-2"></i> info@college.edu
                </p>
            </div>

            <!-- Social Media Links -->
            <div class="col-md-4 mb-4 ms-5">
                <h4 class="fw-bold mb-3" style="color: #196870; font-size: 2rem;">Follow Us</h4>
                <div class="d-flex justify-content-center">
                    <a href="https://facebook.com" target="_blank" class="me-3" style="color: #3b5998; font-size: 2.5rem;">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="me-3" style="color: #1da1f2; font-size: 2.5rem;">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="me-3" style="color: #e4405f; font-size: 2.5rem;">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://linkedin.com" target="_blank" style="color: #0077b5; font-size: 2.5rem;">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Contact Us Section -->


    <footer class="py-4">
        <div class="container">
            <div class="footer-text text-center my-2">
                <p>© Copyright Lunebridge University.
                    <br>
                    All Rights Reserved to Lunebridge University.
                </p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
