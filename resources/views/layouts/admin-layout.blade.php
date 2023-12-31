<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Bkash Concert</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('frontend/images/favicon.png') }}" rel="icon">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/d7b7563d24.js" crossorigin="anonymous"></script>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('admin')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('admin')}}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('admin')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('admin')}}/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary for-color" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary1 navbar-dark">
                <a href="#" class="navbar-brand mx-4 mb-3 logo-bkash-parent">
                    <img src="{{ asset('admin')}}/img/favicon.png" class="logo-bkash" alt=""><span>GP</span>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('admin')}}/img/favicon.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">GP</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href=" {{ url('/home') }} " class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    {{-- {{ route('total-views') }} --}}
                    <a href="{{ route('total-views') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Total views</a>
                    {{-- {{ route('stream-editor') }} --}}
                    {{-- <a href="#" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Stream Settings</a> --}}
                    {{-- <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div> --}}
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary1 navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary for-color mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-1 " type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('admin')}}/img/favicon.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">GP Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary1 border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="{{ route('logout') }}" class="dropdown-item"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                            >
                                Log Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            @yield('admin_content')


            


            


            


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary1 rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="https://www.grameenphone.com">Gp,Cholo Bangladesh</a>, All Right Reserved. 
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg edit-btn-primary btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin')}}/lib/chart/chart.min.js"></script>
    <script src="{{ asset('admin')}}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('admin')}}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('admin')}}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('admin')}}/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{ asset('admin')}}/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{ asset('admin')}}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('admin')}}/js/main.js"></script>
    {{-- <script>
        
        function reloadPageAfterOneMinute() {
            setTimeout(function() {
                location.reload();
            }, 60000); // 60,000 milliseconds = 1 minute
        }
        reloadPageAfterOneMinute();
    </script> --}}
</body>

</html>