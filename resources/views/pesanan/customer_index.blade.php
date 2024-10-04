<h1>Daftar Pesanan</h1>
<a href="{{ route('pesanan.customer.create') }}" class="btn btn-primary">Buat Pesanan</a>
<a href="{{ route('customer.dashboard') }}" class="btn text-white mb-3" style="background-color: #fb8149;">Beranda</a> <!-- Add a link to the customer dashboard -->

<table class="table table-bordered mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Customer</th>
            <th>Teknisi</th>
            <th>Tanggal Pesanan</th>
            <th>Status</th>
            <th>Estimasi Biaya</th> <!-- Add estimated cost column -->
            <th>Estimasi Waktu</th> <!-- Add estimated time column -->
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pesanans as $pesanan)
            <tr>
                <td>{{ $pesanan->id }}</td>
                <td>{{ $pesanan->customer ? $pesanan->customer->email : 'Tidak Ada' }}</td> <!-- Display customer email -->
                <td>{{ $pesanan->teknisi ? $pesanan->teknisi->nama : 'Tidak Ada' }}</td> <!-- Display technician name -->
                <td>{{ $pesanan->tanggal_pesanan }}</td>
                <td>{{ $pesanan->status_service }}</td>
                <td>{{ 'Rp ' . number_format($pesanan->estimasi_biaya, 0, ',', '.') }}</td> <!-- Display estimated cost formatted as Rupiah -->
                <td>{{ $pesanan->estimasi_waktu . " Hari" }}</td> <!-- Display estimated time -->
                <td>
                    <a href="{{ route('pesanan.customer.edit', $pesanan->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pesanan.customer.destroy', $pesanan->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
