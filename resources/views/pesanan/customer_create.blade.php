<div class="container mt-4 mb-5 px-2">
    <h1 class="mb-4">Buat Pesanan</h1>
    <a href="{{ route('customer.dashboard') }}" class="btn text-white mb-3" style="background-color: #fb8149;">Beranda</a>
    <form action="{{ route('pesanan.customer.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tanggal_pesanan">Tanggal Pesanan</label>
            <input type="datetime-local" class="form-control" name="tanggal_pesanan" required>
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

        <button type="submit" class="btn btn-primary">Buat Pesanan</button>
    </form>
</div>
