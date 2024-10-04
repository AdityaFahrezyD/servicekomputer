@section('content')
<h1>Selamat datang, {{ Auth::guard('admin')->user()->nama }}!</h1>
<a href="{{ route('teknisi.index') }}" class="btn text-white mb-3" style="background-color: #fb8149;">Teknisi</a>
<a href="{{ route('customer.index') }}" class="btn text-white mb-3" style="background-color: #fb8149;">Customer</a>
<a href="{{ route('pesanan.admin.index') }}" class="btn text-white mb-3" style="background-color: #fb8149;">Pesanan</a>
<a href="{{ route('services.index') }}" class="btn text-white mb-3" style="background-color: #fb8149;">Daftar Service</a>
<a href="{{ route('spareparts.index') }}" class="btn text-white mb-3" style="background-color: #fb8149;">Daftar Sparepart</a>
<!-- Logout Form -->
<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-danger">Logout</a>

