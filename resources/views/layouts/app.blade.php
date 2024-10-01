<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 16.666667%;
            /*(col-2)*/
            background-color: #2a2b2c;
            color: white;
            padding: 1rem;
        }

        .content {
            margin-left: 16.666667%;
            padding: 1rem;
        }

        .footer {
            margin-left: 16.666667%;
        }
    </style>
    <title>@yield('title', 'Admin - Human Resources')</title>
</head>

<body>
    <div class="row g-0">
        <!-- sidebar -->
        <div class="sidebar">
            <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
                <span class="fs-4">Admin Panel</span>
            </a>
            <hr />
            <ul class="nav flex-column">
                <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white">Admin - Home</a></li>
                <li><a href="{{ route('admin.employee.index') }}" class="nav-link text-white">Admin - Employee</a></li>
                <li><a href="{{ route('admin.department.index') }}" class="nav-link text-white">Admin - Department</a>
                </li>
                <li><a href="{{ route('admin.shift.index') }}" class="nav-link text-white">Admin - Shift</a></li>
                <li><a href="{{ route('admin.employeedepartmenthistory.index') }}" class="nav-link text-white">Admin -
                        Employee Department History</a></li>
            </ul>
        </div>
        <!-- sidebar -->

        <!-- Content -->
        <div class="content col h-100">
            <nav class="p-3 shadow text-end">
                <span class="profile-font">Admin</span>
                <img class="img-profile rounded-circle ms-2" src="https://i.pravatar.cc/80">
            </nav>
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="copyright footer py-4 text-center text-white bg-black">
        <div class="container">
            <small>
                Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://twitter.com/danielgarax">
                    Daniel Correa
                </a>
            </small>
        </div>
    </div>
    <!-- footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
