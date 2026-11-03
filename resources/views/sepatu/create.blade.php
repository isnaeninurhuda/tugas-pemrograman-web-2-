<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <a class="btn btn-primary my-3 py-2" href=" {{ route('sepatu.index') }}
">Kembali</a>

    <form method="POST" action="{{ route('sepatu.store') }}">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                value="{{ old('nama') }}">
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand"
                name="brand" value="{{ old('brand') }}">
            @error('brand')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="ukuran" class="form-label">Ukuran</label>
            <input type="number" class="form-control @error('ukuran') is-invalid @enderror" id="ukuran"
                name="ukuran" value="{{ old('ukuran') }}">
            @error('ukuran')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="warna" class="form-label">Warna</label>
            <input type="text" class="form-control @error('warna') is-invalid @enderror" id="warna"
                name="warna" value="{{ old('warna') }}">
            @error('warna')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="harga_beli" class="form-label">Harga Beli</label>
            <input type="number" class="form-control @error('harga_beli') is-invalid @enderror" id="harga_beli"
                name="harga_beli" value="{{ old('harga_beli') }}">
            @error('harga_beli')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-app>
