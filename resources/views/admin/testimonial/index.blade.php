<x-app-layout>
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Testimonial</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Testimonial
            </p>
        </div>
        <div>
            <a href="{{ route('testimonial.create') }}" class="btn btn-primary"> Add Testimonial</a>
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
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Perusahaan</th>
                                    <th>Deskripsi</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($testimonial as $item)
                                    <tr>
                                        <td><img class="tbl-thumb" src="{{asset('storage/testimonial/'.$item->gambar)}}"
                                                alt="Product Image" /></td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->perusahaan}}</td>
                                        <td>{{$item->deskripsi}}</td>
                                        <td>ACTIVE</td>
                                        <td>{{$item->created_at->isoFormat('m/d/Y')}}</td>
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
                                                    <a class="dropdown-item" href="{{route('testimonial.edit',$item->id)}}">Edit</a>
                                                    <a class="dropdown-item" href="{{route('testimonial.destroy',$item->id)}}">Delete</a>
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
