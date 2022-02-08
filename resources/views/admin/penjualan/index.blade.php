<x-app-layout>
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Surat Jalan</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Surat Jalan
            </p>
        </div>
        <div>
            <a href="{{ route('produk.create') }}" class="btn btn-primary"> Tambah Surat Jalan</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="responsive-data-table" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Penerima</th>
                                    <th>Alamat Penerima</th>
                                    {{-- <th>Kategori</th> --}}
                                    <th>Nomor HP</th>
                                    <th>Produk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($penjualan as $item)
                                    <tr>
                                        <td>{{ $item->no }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->nama_penerima }}</td>
                                        <td>{{ $item->alamat_penerima }}</td>
                                        <td>{{ $item->nomor_hp }}</td>
                                        <td>
                                            <ul>
                                                @foreach ($item->produk as $item1)
                                                    <li>
                                                        {{ $item1['nama'] }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="btn-group mb-1">
                                                <button type="button" class="btn btn-outline-success">Info</button>
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('penjualan.edit', $item->id) }}">Edit</a>
                                                        <a class="dropdown-item"
                                                        href="{{ route('penjualan.show', $item->id) }}">Show</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('penjualan.destroy', $item->id) }}">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
