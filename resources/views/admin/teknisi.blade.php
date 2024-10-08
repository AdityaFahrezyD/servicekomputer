<div class="container mt-4 mb-5 px-2">
    <div class="container-fluid">
        <h1 class="mb-4">Daftar Teknisi</h1>
        <a href="{{ route('teknisi.register') }}" class="btn text-white mb-3" style="background-color: #fb8149;">Tambah Teknisi</a>
        <a href="{{ route('admin.dashboard') }}" class="btn text-white mb-3" style="background-color: #fb8149;">Beranda</a>
        <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Job Desk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teknisis as $teknisi)
                    <tr>
                        <td>{{ $teknisi->id }}</td>
                        <td>{{ $teknisi->nama }}</td>
                        <td>{{ $teknisi->alamat }}</td>
                        <td>{{ $teknisi->hp }}</td>
                        <td>{{ $teknisi->username }}</td>
                        <td>{{ $teknisi->status }}</td>
                        <td>{{ $teknisi->job_desk }}</td>
                        <td>
                            <a href="{{ route('teknisi.edit', $teknisi->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('teknisi.destroy', $teknisi->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" >Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
