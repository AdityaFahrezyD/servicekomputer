<form method="POST" action="{{ route('admin.login') }}">
    @csrf
    <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>
<a href="{{ route('landing') }}">Beranda</a>

