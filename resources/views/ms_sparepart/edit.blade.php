<div class="container">
    <h1>Edit Sparepart</h1>
    
    <form action="{{ route('spareparts.update', $sparepart->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_sparepart">Sparepart Name</label>
            <input type="text" class="form-control" id="nama_sparepart" name="nama_sparepart" value="{{ $sparepart->nama_sparepart }}" required>
        </div>
        
        <div class="form-group">
            <label for="harga">Price</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $sparepart->harga }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('spareparts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>