<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\Produk;
use App\Models\SuratJalan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;
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
        $produk = produk::all();
        $pelanggan = Pelanggan::all();
        return view('admin.penjualan.tambah', compact('produk', 'pelanggan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nomor_hp' => 'required',
            'alamat' => 'required',
            'tgl_faktur' => 'required',
            'tgl_jatuhtempo' => 'required',
        ]);

        // $date = date("his");
        // $extension = $request->file('gambar1')->extension();
        // $file_name = "penjualan_$date.$extension";
        // $path = $request->file('gambar1')->storeAs('public/penjualan', $file_name);
        $produk = $request->produk;
        $jumlah = $request->jumlah;

        $total = 0;
        for ($i = 0; $i < count($produk); $i++) {
            $p = Produk::find($produk[$i]);
            // dd((int)$jumlah[$i],(int)$p->harga);
            $total = (int)$total + ((int)$jumlah[$i] * (int)$p->harga);
            $data[$i] = [
                'nama' => $p->nama,
                'harga' => (int)$p->harga,
                'jumlah' => (int)$jumlah[$i],
                'hargatotal' => (int)$jumlah[$i]*$p->harga,
            ];
        }

        $nama = Pelanggan::find($request->nama);
        Penjualan::create([
            'no' => Str::random(3) . Carbon::today()->toDateString(),
            'nama_penerima' => $nama->nama,
            'nomor_hp' => $request->nomor_hp,
            'alamat_penerima' => $request->alamat,
            'NPWP' => $request->npwp,
            'tgl_faktur' => $request->tgl_faktur,
            'total' => $total,
            'tgl_jatuhtempo' => $request->tgl_jatuhtempo,
            'produk' => $data,
            // 'diskon' => $request->diskon,
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
        return view('admin.penjualan.edit', compact('penjualan'));
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

    public function get_pelanggan(Request $request)
    {
        $data = Pelanggan::find($request->id);
        return $data;
    }

    public function suratjalan($id)
    {
        $suratjalan = Penjualan::find($id);
        return view('admin.penjualan.suratjalan', compact('suratjalan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function suratpenjualan($id)
    {
        $suratpenjualan = Penjualan::find($id);
        return view('admin.penjualan.suratpenjualan', compact('suratpenjualan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
