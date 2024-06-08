<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('style/admin.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
                <a href="#">
                    <i class="bx bxs-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ url('manajemen/manajemen') }}">
                    <i class="bx bx-folder"></i>
                    <span>Manajemen Destinasi</span>
                </a>
            </li>
            <li>
                <a href="{{ url('manajemen/input') }}">
                    <i class="bx bx-notepad"></i>
                    <span>Input Data</span>
                </a>
            </li>
            <li>
                <a href="{{ route('paket.index') }}">
                    <i class="bx bxs-package"></i>
                    <span>Paket Wisata</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-log-out"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="main-content">
        <div class="header-wrapper">
            <div class="header-title">
                <span>Explore Destinasi</span>
                <span>Dashboard</span>
            </div>
            <div class="user-info">
                <div class="search">
                    <i class="bx bx-search-alt"></i>
                    <input type="text" placeholder="Search">
                </div>
                <img src="{{ asset('image/destination.png') }}" alt="">
            </div>
        </div>
    </div>
</body>
</html>
