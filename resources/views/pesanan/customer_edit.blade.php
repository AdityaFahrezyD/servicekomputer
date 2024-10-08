<div class="container">
    <h1>Edit Pesanan</h1>
    <form action="{{ route('pesanan.customer.update', $pesanan->id) }}" method="POST">
        @csrf
        @method('PUT')

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



        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
