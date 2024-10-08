<div class="container mt-4">
    <h1>Edit Customer</h1>
    <form action="{{ route('customer.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $customer->email }}" required>
        </div>

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" value="{{ $customer->nama }}" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" class="form-control" value="{{ $customer->alamat }}" required>
        </div>

        <div class="form-group">
            <label for="hp">No HP:</label>
            <input type="text" name="hp" class="form-control" value="{{ $customer->hp }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('customer.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>