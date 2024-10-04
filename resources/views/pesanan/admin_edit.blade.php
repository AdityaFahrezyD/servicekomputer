<div class="container">
    <h1>Edit Pesanan</h1>
    <form action="{{ route('pesanan.admin.update', $pesanan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="customer_id">Customer:</label>
            <select name="customer_id" class="form-control" required>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $customer->id == $pesanan->customer_id ? 'selected' : '' }}>{{ $customer->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="id_teknisi">Teknisi (Opsional):</label>
            <select name="id_teknisi" class="form-control">
                <option value="">Pilih Teknisi</option>
                @foreach($teknisis as $teknisi)
                    <option value="{{ $teknisi->id }}" {{ $teknisi->id == $pesanan->id_teknisi ? 'selected' : '' }}>{{ $teknisi->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tanggal_pesanan">Tanggal Pesanan:</label>
            <input type="datetime-local" name="tanggal_pesanan" class="form-control" value="{{ \Carbon\Carbon::parse($pesanan->tanggal_pesanan)->format('Y-m-d\TH:i') }}" required>
        </div>

        <div class="form-group">
            <label for="estimasi_biaya">Estimasi Biaya (Opsional)</label>
            <input type="number" class="form-control" name="estimasi_biaya" value="{{ $pesanan->estimasi_biaya }}">
        </div>

        <div class="form-group">
            <label for="estimasi_waktu">Estimasi Waktu (Opsional)</label>
            <input type="number" class="form-control" name="estimasi_waktu" value="{{ $pesanan->estimasi_waktu }}">
        </div>

        <div class="form-group">
            <label for="status_service">Status:</label>
            <select name="status_service" class="form-control" required>
                <option value="booked" {{ $pesanan->status_service == 'booked' ? 'selected' : '' }}>Booked</option>
                <option value="menunggu" {{ $pesanan->status_service == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
                <option value="dalam proses" {{ $pesanan->status_service == 'dalam proses' ? 'selected' : '' }}>Dalam Proses</option>
                <option value="selesai" {{ $pesanan->status_service == 'selesai' ? 'selected' : '' }}>Selesai</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
