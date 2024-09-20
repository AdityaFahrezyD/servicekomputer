
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Customer Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Selamat datang, {{ Auth::guard('customer')->user()->nama }}!</h4>

                    <p>
                        Ini adalah dashboard untuk customer. Di sini, Anda dapat melihat informasi dan fitur layanan kami.
                    </p>

                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="#">Cek Status Service</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Riwayat Pemesanan</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Edit Profil</a>
                        </li>
                        <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

