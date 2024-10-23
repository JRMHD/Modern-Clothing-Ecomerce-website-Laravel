<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <title>@yield('title') | Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --sidebar-width: 250px;
            --sidebar-collapsed-width: 70px;
            --header-height: 60px;
            --primary-color: #ECF5F4;
            --sidebar-bg: #2c3e50;
            --sidebar-hover: #34495e;
        }

        body {
            min-height: 100vh;
            background-color: #f8f9fa;
            overflow-x: hidden;
        }

        /* Sidebar Styles */
        #sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: var(--sidebar-bg);
            transition: all 0.3s ease;
            z-index: 1000;
        }

        #sidebar.active {
            width: var(--sidebar-collapsed-width);
        }

        #sidebar .sidebar-header {
            padding: 15px;
            background: var(--sidebar-bg);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        #sidebar .sidebar-header img {
            max-width: 120px;
            height: auto;
        }

        #sidebar.active .sidebar-header h3,
        #sidebar.active .sidebar-header img {
            display: none;
        }

        #sidebar ul.components {
            padding: 20px 0;
        }

        #sidebar ul li {
            position: relative;
        }

        #sidebar ul li a {
            padding: 12px 20px;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        #sidebar ul li a i {
            min-width: 25px;
            margin-right: 10px;
            font-size: 1.1rem;
        }

        #sidebar.active ul li a span {
            display: none;
        }

        #sidebar ul li a:hover {
            color: #fff;
            background: var(--sidebar-hover);
        }

        #sidebar ul li.active>a {
            background: var(--sidebar-hover);
            color: #fff;
        }

        /* Content Area Styles */
        #content {
            margin-left: var(--sidebar-width);
            transition: all 0.3s ease;
            min-height: 100vh;
            background: #f8f9fa;
        }

        #content.active {
            margin-left: var(--sidebar-collapsed-width);
        }

        /* Navbar Styles */
        .top-navbar {
            height: var(--header-height);
            background: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .08);
            padding: 0 1.5rem;
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .navbar-brand {
            font-size: 1.2rem;
            font-weight: 600;
        }

        #sidebarCollapse {
            padding: 5px 10px;
            background: var(--sidebar-bg);
            border: none;
            transition: all 0.3s ease;
        }

        #sidebarCollapse:hover {
            background: var(--sidebar-hover);
        }

        /* User Profile Dropdown */
        .user-profile {
            position: relative;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .user-profile img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            margin-right: 10px;
        }

        /* Main Content Area */
        .main-content {
            padding: 2rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            #sidebar {
                margin-left: calc(-1 * var(--sidebar-width));
            }

            #sidebar.active {
                margin-left: 0;
                width: var(--sidebar-width);
            }

            #content {
                margin-left: 0;
            }

            #content.active {
                margin-left: 0;
            }

            #sidebar.active .sidebar-header h3,
            #sidebar.active ul li a span {
                display: inline;
            }

            .overlay {
                display: none;
                position: fixed;
                width: 100vw;
                height: 100vh;
                background: rgba(0, 0, 0, 0.5);
                z-index: 998;
                opacity: 0;
                transition: all 0.5s ease-in-out;
            }

            .overlay.active {
                display: block;
                opacity: 1;
            }
        }

        /* Utilities */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .05);
        }

        .stat-card {
            padding: 1.5rem;
            border-radius: 10px;
            background: white;
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body>
    <!-- Overlay for mobile -->
    <div class="overlay"></div>

    <div class="wrapper d-flex">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="{{ asset('images/logo2.png') }}" alt="Logo" class="img-fluid">
                <h3 class="text-white">Admin Panel</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="{{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ Request::routeIs('/admin/products*') ? 'active' : '' }}">
                    <a href="{{ url('/admin/products') }}">
                        <i class="fas fa-file-alt"></i>
                        <span>Manage Posts</span>
                    </a>
                </li>
                <li class="{{ Request::routeIs('admin.orders*') ? 'active' : '' }}">
                    <a href="{{ url('admin.orders') }}">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Manage Orders</span>
                    </a>
                </li>
                <li class="{{ Request::routeIs('admin.users*') ? 'active' : '' }}">
                    <a href="{{ url('admin.users') }}">
                        <i class="fas fa-users"></i>
                        <span>Manage Users</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.logout') }}">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="content">
            <!-- Top Navbar -->
            <nav class="top-navbar navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-dark">
                        <i class="fas fa-bars"></i>
                    </button>

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-bell"></i>
                                <span class="badge bg-danger">3</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown ms-3">
                            <a class="nav-link user-profile" href="#" role="button" data-bs-toggle="dropdown">
                                <div
                                    style="width: 35px; height: 35px; background-color: #007bff; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                                    CG
                                </div>
                                <span>Admin</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content Area -->
            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            const sidebarCollapse = document.getElementById('sidebarCollapse');
            const overlay = document.querySelector('.overlay');

            sidebarCollapse.addEventListener('click', function() {
                sidebar.classList.toggle('active');
                content.classList.toggle('active');
                if (window.innerWidth <= 768) {
                    overlay.classList.toggle('active');
                }
            });

            // Close sidebar when clicking overlay (mobile)
            overlay.addEventListener('click', function() {
                sidebar.classList.remove('active');
                overlay.classList.remove('active');
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    overlay.classList.remove('active');
                }
            });
        });
    </script>
</body>

</html>
