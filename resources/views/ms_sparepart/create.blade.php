<div class="container">
    <h1>Add New Sparepart</h1>
    
    <form action="{{ route('spareparts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_sparepart">Sparepart Name</label>
            <input type="text" class="form-control" id="nama_sparepart" name="nama_sparepart" required>
        </div>
        
        <div class="form-group">
            <label for="harga">Price</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('spareparts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>