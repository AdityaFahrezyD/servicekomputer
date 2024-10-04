<div class="container mt-4">
    <h1>Edit Teknisi</h1>
    <form action="{{ route('teknisi.update', $teknisi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" value="{{ $teknisi->nama }}" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" class="form-control" value="{{ $teknisi->alamat }}" required>
        </div>

        <div class="form-group">
            <label for="hp">No HP:</label>
            <input type="text" name="hp" class="form-control" value="{{ $teknisi->hp }}" required>
        </div>

        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control" value="{{ $teknisi->username }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control">
                <option value="" {{ $teknisi->status == null ? 'selected' : '' }}>Kosong</option>
                <option value="dalam pengerjaan" {{ $teknisi->status == 'dalam pengerjaan' ? 'selected' : '' }}>Dalam Pengerjaan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="job_desk">Job Desk:</label>
            <input type="text" name="job_desk" class="form-control" value="{{ $teknisi->job_desk }}" placeholder="Job Desk">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('teknisi.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>