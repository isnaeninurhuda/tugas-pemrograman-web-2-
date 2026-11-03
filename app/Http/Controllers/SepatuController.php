<?php

namespace App\Http\Controllers;

use App\Models\Sepatu;
use Illuminate\Http\Request;

class SepatuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sepatu.index', [
            'title' => 'sepatu',
            'sepatus' => Sepatu::latest()->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sepatu.create', [
            'title' => 'Tambah Data Sepatu'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'       => 'required|string',
            'brand'      => 'required|string',
            'ukuran'     => 'required|integer|min:20|max:60',
            'warna'      => 'required|string',
            'harga_beli' => 'required|integer|min:0',
        ], [
            'nama.required'       => 'Nama sepatu wajib diisi.',
            'brand.required'      => 'Brand wajib diisi.',
            'ukuran.required'     => 'Ukuran wajib diisi.',
            'ukuran.integer'      => 'Ukuran harus berupa angka bulat.',
            'ukuran.min'          => 'Ukuran minimal 20.',
            'ukuran.max'          => 'Ukuran maksimal 60.',
            'warna.required'      => 'Warna wajib diisi.',
            'harga_beli.required' => 'Harga beli wajib diisi.',
            'harga_beli.integer'  => 'Harga beli harus berupa angka bulat.',
            'harga_beli.min'      => 'Harga beli tidak boleh kurang dari 0.',
        ]);

        Sepatu::create($validated);

        return to_route('sepatu.index')->with('success', 'Sepatu berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(sepatu $sepatu)
    {
        return view('sepatu.show', [
            'title' => 'Detail Sepatu',
            'sepatu' => $sepatu

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sepatu $sepatu)
    {
        return view('sepatu.edit', [
            'title' => 'Edit Data Sepatu',
            'sepatu' => $sepatu

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sepatu $sepatu)
    {
        $validated = $request->validate([
            'nama'       => 'required|string',
            'brand'      => 'required|string',
            'ukuran'     => 'required|integer|min:20|max:60',
            'warna'      => 'required|string',
            'harga_beli' => 'required|integer|min:0',
        ], [
            'nama.required'       => 'Nama sepatu wajib diisi.',
            'brand.required'      => 'Brand wajib diisi.',
            'ukuran.required'     => 'Ukuran wajib diisi.',
            'ukuran.integer'      => 'Ukuran harus berupa angka bulat.',
            'ukuran.min'          => 'Ukuran minimal 20.',
            'ukuran.max'          => 'Ukuran maksimal 60.',
            'warna.required'      => 'Warna wajib diisi.',
            'harga_beli.required' => 'Harga beli wajib diisi.',
            'harga_beli.integer'  => 'Harga beli harus berupa angka bulat.',
            'harga_beli.min'      => 'Harga beli tidak boleh kurang dari 0.',
        ]);

        $sepatu->update($validated);

        return to_route('sepatu.index')->with('success', 'Sepatu berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sepatu $sepatu)
    {
        $sepatu->delete();

        return to_route('sepatu.index')->withSuccess('Data Berhasil Dihapus');
    }
}
