<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\SuratJalan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SuratJalanController extends Controller
{
    public function index()
    {
        $suratjalan = SuratJalan::all();
        return view('admin.suratjalan.index', compact('suratjalan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $produk = Produk::all();
        return view('admin.suratjalan.tambah',compact('produk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penerima' => 'required',
            'nomor_hp' => 'required',
            'alamat_penerima' => 'required',
            'tanggal' => 'required',
        ]);

        // $date = date("his");
        // $extension = $request->file('gambar1')->extension();
        // $file_name = "suratjalan_$date.$extension";
        // $path = $request->file('gambar1')->storeAs('public/suratjalan', $file_name);
        $produk = $request->produk;
        $jumlah = $request->jumlah;
    

        for ($i=0; $i < count($produk); $i++) { 
            $p = Produk::find($produk[$i]);
            $data[$i] = [
                'nama' => $p->nama,
                'harga' => $p->harga,
                'jumlah' => $jumlah[$i],
            ];
        }
        // dd($data);
        // foreach($produk as $item){
        //   $data[]=[
        //     'nama'=>'asd',
        //     'jumlah'
        //   ];
        // }

        SuratJalan::create([
            'no' => Str::random(3).Date::now(),
            'nama_penerima' => $request->nama_penerima,
            'nomor_hp' => $request->nomor_hp,
            // 'gambar' => $file_name,
            'alamat_penerima' => $request->alamat_penerima,
            'tanggal' => $request->tanggal,
            'produk' => $data,
        ]);
        return redirect()->route('suratjalan.index')
            ->with('success', 'suratjalan Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $suratjalan = SuratJalan::find($id);
        return view('admin.suratjalan.show', compact('suratjalan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $suratjalan = SuratJalan::find($id);
        // $kategori = Kategori::all();
        return view('admin.suratjalan.edit',compact('suratjalan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'detail' => 'required',
            'gambar1' => 'file|mimes:jpg,png,jpeg,gif,svg,jfif|max:2048',
            'harga' => 'required',
            'kategori_id' => 'required',
            'stok' => 'required',
        ]);

        $suratjalan = SuratJalan::findOrFail($id);

        if ($request->has("gambar1")) {

            Storage::delete("public/suratjalan/$suratjalan->gambar");

            $date = date("his");
            $extension = $request->file('gambar1')->extension();
            $file_name = "suratjalan_$date.$extension";
            $path = $request->file('gambar1')->storeAs('public/suratjalan', $file_name);
            
            $suratjalan->gambar = $file_name;
        }

        $suratjalan->nama = $request->nama;
        $suratjalan->detail = $request->detail;
        $suratjalan->harga = $request->harga;
        $suratjalan->kategori_id = $request->kategori_id;
        $suratjalan->stok = $request->stok;
        $suratjalan->save();

        return redirect()->route('suratjalan.index')
        ->with('edit', 'suratjalan Berhasil Diedit');
    }

    public function destroy($id)
    {
        $suratjalan = SuratJalan::findOrFail($id);
        Storage::delete("public/suratjalan/$suratjalan->gambar");
        $suratjalan->delete();
        return redirect()->route('suratjalan.index')
            ->with('delete', 'suratjalan Berhasil Dihapus');
    }
}
