<x-app-layout>
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>pelanggan</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Pelanggan
            </p>
        </div>
        <div>
            <a href="{{ route('pelanggan.create') }}" class="btn btn-primary"> Tambah Pelanggan</a>
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
                                    <th>Pelanggan</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Nomor HP</th>                                   
                                    <th>NPWP</th>
                                    <th>KTP</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($pelanggan as $item)
                                    <tr>
                                        <td><img class="tbl-thumb" src="{{asset('storage/pelanggan/'.$item->image)}}"
                                                alt="Product Image" /></td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->alamat}}</td>
                                        <td>{{$item->nomor_hp}}</td>
                                        <td>{{$item->npwp}}</td>
                                        <td>{{$item->ktp}}</td>
                                        <td>{{Str::upper($item->status)}}</td>
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
                                                    <a class="dropdown-item" href="{{route('pelanggan.edit',$item->id)}}">Edit</a>
                                                    <a class="dropdown-item" href="{{url('destroyPelanggan',$item->id)}}">Delete</a>
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
