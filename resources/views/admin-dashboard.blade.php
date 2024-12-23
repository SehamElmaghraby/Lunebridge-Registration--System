<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('image/cap.png') }}" type="image/x-icon">
    <title>Lunebridge</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Righteous&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/studprofile.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container py-1">

            <img src="{{ asset('Image/lunebridge Logo.png') }}"
            alt="LUNEBRIDGE Logo"
            style="height: 70px; margin-right: 10px;">
       <span class="text-white fw-bold" style="font-size: 1.8rem;">LUNEBRIDGE</span>
            {{-- <a class="nav-header fw-bolder" style="font-size: 1.5rem;" href="#">LUNEBRIDGE</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active fw-bolder" aria-current="page" href="#students">Students</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link fw-bolder" href="#courses">Courses</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn ">Logout</button>
                        </form>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    {{-- <div class="student-data mb-1">
        <div class="row text-center gy-4 ">
            <div class="col-md-3">
                <span  style="font-size: 1.5rem"><span style="font-size: 1.5rem" class="fw-bolder"> Name:</span> {{ $user->first_name}} {{ $user->last_name}}</span>
            </div>

            <div class="col-md-3">
                <span  style="font-size: 1.5rem"><span  style="font-size: 1.5rem" class="fw-bolder">College Name:</span>Computer Science</span>
            </div>

        </div>
    </div> --}}
    <!-- Admin Information Section -->
    {{-- <section class="mt-5 pt-5">
        <div class="container text-center">
            <h3>Welcome, {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h3>
            <h5>College: Computer Science</h5>
        </div>
    </section> --}}

<section class="vh-100 d-flex justify-content-center align-items-center" id="add-course">
    <div class="container">

        <div class="row g-4 ">
            <div class="">
                <h2 style="color: #196870" class=" mb-4">Welcome, {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h2>
            </div>
            <div class="">
                <h3 style="color: #196870" class=" mb-4">Faculty of: Computer Science</h3>
            </div>
        </div>

        <h4 class="text-center mb-4" style="color: #196870">Add New Course</h4>
        <form action="{{ route('admin-courses.store') }}" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" name="course_code" class="form-control" placeholder="Course Code" required>
                </div>
                <div class="col-md-4">
                    <input type="text" name="course_name" class="form-control" placeholder="Course Name" required>
                </div>
                <div class="col-md-4">
                    <input type="text" name="credit_hours" class="form-control" placeholder="Credit Hours" required>
                </div>
            </div>
            <div class="mt-3 text-center">
                <button type="submit"  class="btn ">Add Course</button>
            </div>
        </form>

    </div>
</section>

<section class="vh-100 d-flex justify-content-center align-items-center" id="courses">
    <div class="container">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if($errors->any())
        <div class="alert ">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="enrolled-courses pt-5">
            <h3 class="text-center mb-4" style="color: #196870">Courses List</h3>
            <table class="table text-center table-responsive">
                <thead>
                    <tr>
                        <th>Index</th>
                        <th>Course Name</th>
                        <th>Course Code</th>
                        <th>Credit Hours</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $index => $course)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->course_code }}</td>
                            <td>{{ $course->credit_hours }}</td>

                            <td>
                                <form action="{{ route('admin-courses.delete', $course->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this course?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn ">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
<section class="vh-100 d-flex justify-content-center align-items-center" id="add-student">
    <div class="container">

        <h4 class="text-center mb-4" style="color: #196870">Add New Student</h4>
        <form action="{{ route('admin-students.store') }}" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" name="student_id" class="form-control" placeholder="Student ID" required>
                </div>
                <div class="col-md-4">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                </div>
                <div class="col-md-4">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                </div>
            </div>
            <div class="mt-3 text-center">
                <button type="submit" class="btn ">Add Student</button>
            </div>
        </form>
    </div>
</section>



    <section class="vh-100 d-flex justify-content-center align-items-center" id="students">
        <div class="container">
            <div class="student-data mb-1">
                <h3 class="text-center mb-4">Students List</h3>
                <table class="table text-center table-responsive">
                    <thead>
                        <tr>
                            <th>Index</th>
                            <th>Student Name</th>
                            <th>Student ID</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $index => $student)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                                <td>{{ $student->student_id }}</td>
                                <td>
                                    <form action="{{ route('admin-students.delete', $student->student_id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn ">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

<!-- Add JavaScript to disable the back button -->
<script>
    // Prevent going back in history
    window.history.pushState(null, null, window.location.href);
    window.onpopstate = function () {
        window.history.pushState(null, null, window.location.href);
    };
</script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
