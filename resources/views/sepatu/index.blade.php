<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a class="btn btn-primary my-3 py-2" href="{{ route('sepatu.create') }}">Tambah Data Sepatu</a>

    <table class="table  table-bordered border-dark table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Brand</th>
                <th>Ukuran</th>
                <th>Warna</th>
                <th>Harga_beli</th>
                <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($sepatus as $sepatu)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $sepatu->nama }}</td>
                    <td>{{ $sepatu->brand }}</td>
                    <td>{{ $sepatu->ukuran }}</td>
                    <td>{{ $sepatu->warna }}</td>
                    <td>Rp.{{ $sepatu->harga_beli }}</td>
                    <td>
                        <a class="btn btn-warning btn-3 btn-sm" href=" {{ route('sepatu.edit', $sepatu->id) }}">edit</a>
                        <a class="btn btn-info btn-3 btn-sm" href=" {{ route('sepatu.show', $sepatu->id) }}">show</a>

                        <form method="POST" action="{{ route('sepatu.destroy', $sepatu) }}" class="d-inline">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app>
