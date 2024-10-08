<h1>Daftar Pesanan</h1>
<a href="{{ route('pesanan.admin.create') }}" class="btn btn-primary">Buat Pesanan</a>
<a href="{{ route('admin.dashboard') }}" class="btn text-white mb-3" style="background-color: #fb8149;">Beranda</a>
<table class="table table-bordered mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Customer</th>
            <th>Teknisi</th>
            <th>Tanggal Pesanan</th>
            <th>Status</th>
            <th>Estimasi Biaya</th>
            <th>Estimasi Waktu</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pesanans as $pesanan)
            <tr>
                <td>{{ $pesanan->id }}</td>
                <td>{{ $pesanan->customer ? $pesanan->customer->email : 'Tidak Ada' }}</td> 
                <td>{{ $pesanan->teknisi ? $pesanan->teknisi->nama : 'Tidak Ada' }}</td> <!-- Display technician name -->
                <td>{{ $pesanan->tanggal_pesanan }}</td>
                <td>{{ $pesanan->status_service }}</td>
                <td>{{ 'Rp ' . number_format($pesanan->estimasi_biaya, 0, ',', '.') }}</td>
                <td>{{ $pesanan->estimasi_waktu . " Hari" }}</td>
                <td>
                    <a href="{{ route('pesanan.admin.edit', $pesanan->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pesanan.admin.destroy', $pesanan->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
