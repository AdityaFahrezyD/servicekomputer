<form method="POST" action="{{ route('customer.login') }}">
    @csrf
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>
<p>Belum punya akun? <a href="{{ route('customer.register') }}">Registrasi dahulu</a></p>
<a href="{{ route('landing') }}">Beranda</a>