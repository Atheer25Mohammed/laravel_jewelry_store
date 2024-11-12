<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Adi موقع للمجوهرات </title>

    <!-- ربط CSS الخاص بالموقع -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- ربط Bootstrap من CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ربط Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar - الشريط العلوي للتنقل -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('dashboard') }}"> Adi store </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('jewelries.index') }}">المجوهرات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('customers.index') }}">العملاء</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">اللوحة الرئيسية</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row">
            <!-- تضمين الشريط الجانبي -->
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark text-white">
                @include('layouts.sidebar') <!-- الشريط الجانبي -->
            </div>

            <!-- محتوى الصفحة -->
            <div class="col-md-9 ms-sm-auto col-lg-10 px-4">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- ربط JavaScript لـ Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
