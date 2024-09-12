<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JobEntry - Job Portal Website Template</title>

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('template2/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template2/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('template2/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('template2/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <div class="container-fluid d-flex justify-content-center">
            <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <img src="aaa" alt="">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>


            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                <div class="navbar-nav mx-auto p-4 p-lg-0 d-flex justify-content-center">
                    <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ route('layanan') }}" class="nav-item nav-link">Layanan Warga</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="job-list.html" class="dropdown-item">Job List</a>
                            <a href="job-detail.html" class="dropdown-item">Job Detail</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="category.html" class="dropdown-item">Job Category</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404</a>
                        </div>
                    </div>
                </div>
                <!-- Responsive Buttons -->
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <div class="me-3 text-center">
                        <a href="{{ route('register') }}" class="btn btn-outline-dark" style="padding-bottom: 0%">Sign Up</a>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('login') }}" class="btn btn-outline-dark">Login</a>
                    </div>
                </div>
                
                
            </div>
        </div>
    </nav>


    @yield('content')

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('template2/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('template2/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('template2/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('template2/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('template2/js/main.js') }}"></script>
</body>

</html>
