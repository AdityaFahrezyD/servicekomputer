<div class="container mt-4 mb-5 px-2">
    <div class="container-fluid">
        <h1 class="mb-4">Daftar Customer</h1>
        <a href="{{ route('customer.register') }}" class="btn text-white mb-3" style="background-color: #fb8149;">Tambah Customer</a>
        <a href="{{ route('admin.dashboard') }}" class="btn text-white mb-3" style="background-color: #fb8149;">Beranda</a>
        <table class="table table-bordered table-striped">
                <tr>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->nama }}</td>
                        <td>{{ $customer->alamat }}</td>
                        <td>{{ $customer->hp }}</td>
                        <td>
                            <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('customer.destroy', $customer->id) }}" method="POST" style="display:inline;">
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
