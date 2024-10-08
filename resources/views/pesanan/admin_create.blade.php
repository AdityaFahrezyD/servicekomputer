<div class="container mt-4 mb-5 px-2">
    <h1 class="mb-4">Buat Pesanan</h1>
    <a href="{{ route('admin.dashboard') }}" class="btn text-white mb-3" style="background-color: #fb8149;">Beranda</a>
    <form action="{{ route('pesanan.admin.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tanggal_pesanan">Tanggal Pesanan</label>
            <input type="datetime-local" class="form-control" name="tanggal_pesanan" required>
        </div>
        <div class="form-group">
            <label for="customer_id">Customer</label>
            <select name="customer_id" class="form-control" required>
                <option value="">Pilih Customer</option>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->email }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="id_teknisi">Teknisi (Opsional)</label>
            <select name="id_teknisi" class="form-control">
                <option value="">Pilih Teknisi</option>
                @foreach($teknisis as $teknisi)
                    <option value="{{ $teknisi->id }}">{{ $teknisi->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="estimasi_biaya">Estimasi Biaya (Opsional)</label>
            <input type="number" class="form-control" name="estimasi_biaya">
        </div>
        <div class="form-group">
            <label for="estimasi_waktu">Estimasi Waktu (Opsional)</label>
            <input type="number" class="form-control" name="estimasi_waktu">
        </div>
        <button type="submit" class="btn btn-primary">Buat Pesanan</button>
    </form>
</div>
