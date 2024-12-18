@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('image/cap.jpg') }}" type="image/x-icon">
    <title>Lunebridge</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Righteous&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- webfonts -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/studprofile.css') }}">
</head>

<body data-bs-spy="scroll" data-bs-target="#navId">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container py-3">
            <a class=" nav-header fw-bolder" style="font-size: 1.5rem;" href="#">College Name</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active fw-bolder" aria-current="page" href="#Home">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link fw-bolder " href="#courses">Courses</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="vh-100 d-flex justify-content-center align-items-center" id="Home">
        <div class="container">
            <div class="student-data mb-1">
                <div class="row text-center gy-4">
                    <div class="col-md-3">
                        <span><span class="fw-bolder">Student Name:</span> {{ Auth::user()->first_name }}</span>
                    </div>
                    <div class="col-md-3">
                        <span><span class="fw-bolder">Student name:</span> {{ Auth::user()->last_name }}</span>
                    </div>
                    <div class="col-md-3">
                        <span><span class="fw-bolder">student id:</span> {{ Auth::user()->id }}</span>
                    </div>
                    <div class="col-md-3">
                        <span><span class="fw-bolder">Year:</span> {{ now()->year }}</span>
                    </div>
                </div>
            </div>
            <div class="enrolled-courses pt-5">
                <table class="table text-center table-responsive">
                    <thead>
                        <th>Index</th>
                        <th>Course Name</th>
                        <th>Course ID</th>
                        <th>Credit Hours</th>
                        <th>Drop</th>
                    </thead>
                    <tbody>
                        @forelse($student->courses as $index => $course)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->id }}</td>
                                <td>{{ $course->credit_hours }}</td>
                                <td>
                                    <form action="{{ route('courses.drop', $course->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Drop</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No enrolled courses available.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
@endsection
