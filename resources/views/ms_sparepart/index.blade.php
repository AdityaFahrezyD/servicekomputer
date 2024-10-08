<div class="container">
    <h1>Spareparts</h1>
    <a href="{{ route('spareparts.create') }}" class="btn btn-primary mb-3">Add New Sparepart</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Sparepart Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($spareparts as $sparepart)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $sparepart->nama_sparepart }}</td>
                    <td>{{ 'Rp ' . number_format($sparepart->harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('spareparts.edit', $sparepart->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('spareparts.destroy', $sparepart->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>