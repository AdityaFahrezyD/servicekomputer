<form method="POST" action="{{ route('customer.register') }}">
    @csrf
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
    <input type="text" name="nama" placeholder="Nama" value="{{ old('nama') }}">
    <input type="text" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
    <input type="text" name="hp" placeholder="HP" value="{{ old('hp') }}">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password">
    <button type="submit">Register</button>
</form>
<p>Sudah punya akun? <a href="{{ route('customer.login') }}">Login</a></p>
<a href="{{ route('landing') }}">Beranda</a>