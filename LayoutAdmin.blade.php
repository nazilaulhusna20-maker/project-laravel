<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Mengambil judul spesifik dari setiap halaman --}}
    <title>Aplikasi Laravel - @yield('title')</title>
    
    
    {{-- Menautkan file CSS dari folder public/css/ --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    {{-- Header dan Navigasi --}}
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/services') }}">Services</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    {{-- Konten Utama Halaman --}}
    <div class="container">
        {{-- Tempat konten unik setiap halaman akan dimasukkan --}}
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer>
        <p>&copy; {{ date('Y') }} Aplikasi Laravel. All rights reserved.</p>
    </footer>
</body>
</html>


