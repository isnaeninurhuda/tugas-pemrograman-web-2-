<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <a class="btn btn-primary my-3 py-2" href=" {{ route('sepatu.index') }}
">Kembali</a>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detail Sepatu</h5>
            <p class="card-text"><strong>Nama:</strong> {{ $sepatu->nama }}</p>
            <p class="card-text"><strong>brand:</strong> {{ $sepatu->brand }}</p>
            <p class="card-text"><strong>ukuran:</strong> {{ $sepatu->ukuran }}</p>
            <p class="card-text"><strong>warna:</strong> {{ $sepatu->warna }}</p>
            <p class="card-text"><strong>harga beli:</strong> Rp.{{ $sepatu->harga_beli }}</p>
        </div>
    </div>
</x-app>
