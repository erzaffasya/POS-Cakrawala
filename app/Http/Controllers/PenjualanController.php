<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = Penjualan::all();
        return view('admin.penjualan.index', compact('penjualan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $produk = Penjualan::all();
        $pelanggan = Pelanggan::all();
        return view('admin.penjualan.tambah',compact('produk','pelanggan'));
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
        // $file_name = "penjualan_$date.$extension";
        // $path = $request->file('gambar1')->storeAs('public/penjualan', $file_name);
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

        Penjualan::create([
            'no' => Str::random(3).Date::now(),
            'nama_penerima' => $request->nama_penerima,
            'nomor_hp' => $request->nomor_hp,
            // 'gambar' => $file_name,
            'alamat_penerima' => $request->alamat_penerima,
            'tanggal' => $request->tanggal,
            'produk' => $data,
        ]);
        return redirect()->route('penjualan.index')
            ->with('success', 'penjualan Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $penjualan = Penjualan::find($id);
        return view('admin.penjualan.show', compact('penjualan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $penjualan = Penjualan::find($id);
        // $kategori = Kategori::all();
        return view('admin.penjualan.edit',compact('penjualan'));
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

        $penjualan = Penjualan::findOrFail($id);

        if ($request->has("gambar1")) {

            Storage::delete("public/penjualan/$penjualan->gambar");

            $date = date("his");
            $extension = $request->file('gambar1')->extension();
            $file_name = "penjualan_$date.$extension";
            $path = $request->file('gambar1')->storeAs('public/penjualan', $file_name);
            
            $penjualan->gambar = $file_name;
        }

        $penjualan->nama = $request->nama;
        $penjualan->detail = $request->detail;
        $penjualan->harga = $request->harga;
        $penjualan->kategori_id = $request->kategori_id;
        $penjualan->stok = $request->stok;
        $penjualan->save();

        return redirect()->route('penjualan.index')
        ->with('edit', 'penjualan Berhasil Diedit');
    }

    public function destroy($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        Storage::delete("public/penjualan/$penjualan->gambar");
        $penjualan->delete();
        return redirect()->route('penjualan.index')
            ->with('delete', 'penjualan Berhasil Dihapus');
    }
}
