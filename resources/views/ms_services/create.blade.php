<div class="container">
    <h1>Add New Service</h1>
    
    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_service">Service Name</label>
            <input type="text" class="form-control" id="nama_service" name="nama_service" required>
        </div>
        
        <div class="form-group">
            <label for="harga">Price</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>