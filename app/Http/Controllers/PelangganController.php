<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('admin.pelanggan.index', compact('pelanggan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        // $kategori = Kategori::all();
        return view('admin.pelanggan.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'nomor_hp' => 'required',
            'npwp' => 'required',
            'ktp' => 'required',
            // 'gambar1' => 'required', 
        ]);

        // $date = date("his");
        // $extension = $request->file('gambar1')->extension();
        // $file_name = "pelanggan_$date.$extension";
        // $path = $request->file('gambar1')->storeAs('public/Pelanggan', $file_name);

        Pelanggan::create([
            'nama' => $request->nama,
            'nomor_hp' => $request->nomor_hp,
            // 'gambar' => $file_name,
            'alamat' => $request->alamat,
            'npwp' => $request->npwp,
            'ktp' => $request->ktp,
        ]);
        return redirect()->route('pelanggan.index')
            ->with('success', 'pelanggan Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $pelanggan = Pelanggan::where('id', $id)->first();
        return view('admin.pelanggan.show', compact('pelanggan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $pelanggan = Pelanggan::find($id);
        // $kategori = Kategori::all();
        return view('admin.pelanggan.edit',compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nomor_hp' => 'required',
            // 'gambar1' => 'file|mimes:jpg,png,jpeg,gif,svg,jfif|max:2048',
            'alamat' => 'required',
            // 'kategori_id' => 'required',
            'npwp' => 'required',
            'ktp' => 'required',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);

        // if ($request->has("gambar1")) {

        //     Storage::delete("public/Pelanggan/$pelanggan->gambar");

        //     $date = date("his");
        //     $extension = $request->file('gambar1')->extension();
        //     $file_name = "pelanggan_$date.$extension";
        //     $path = $request->file('gambar1')->storeAs('public/Pelanggan', $file_name);
            
        //     $pelanggan->gambar = $file_name;
        // }

        $pelanggan->nama = $request->nama;
        $pelanggan->nomor_hp = $request->nomor_hp;
        $pelanggan->alamat = $request->alamat;
        // $pelanggan->kategori_id = $request->kategori_id;
        $pelanggan->npwp = $request->npwp;
        $pelanggan->ktp = $request->ktp;
        $pelanggan->save();

        return redirect()->route('pelanggan.index')
        ->with('edit', 'pelanggan Berhasil Diedit');
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        // Storage::delete("public/Pelanggan/$pelanggan->gambar");
        $pelanggan->delete();
        return redirect()->route('pelanggan.index')
            ->with('delete', 'pelanggan Berhasil Dihapus');
    }

    public function grid()
    {
        $pelanggan = Pelanggan::all();
        // $kategori = Kategori::all();
        return view('admin.pelanggan.grid', compact('pelanggan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
