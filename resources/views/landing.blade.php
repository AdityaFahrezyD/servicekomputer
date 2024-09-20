<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
</head>
<body>
    <h1>Selamat Datang di Landing Page</h1>
    <p>Ini adalah halaman landing page yang bisa diakses tanpa login.</p>

    <!-- Tambahkan link ke halaman login atau registrasi jika diperlukan -->
    <a href="{{ route('customer.login') }}">Login Customer</a>
    <a href="{{ route('customer.register') }}">Registrasi Customer</a>
    <a href="{{ route('landing') }}">Beranda</a>
</body>
</html>
