<form method="POST" action="{{ route('teknisi.register') }}">
    @csrf
    <input type="text" name="nama" placeholder="Nama" value="{{ old('nama') }}">
    <input type="text" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
    <input type="text" name="hp" placeholder="HP" value="{{ old('hp') }}">
    <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password">
    <button type="submit">Register</button>
</form>