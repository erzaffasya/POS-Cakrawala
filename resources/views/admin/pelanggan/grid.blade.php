<x-app-layout>
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Product</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Product
            </p>
        </div>
        <div>
            <a href="{{route('produk.create')}}" class="btn btn-primary"> Add Porduct</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <div class="card-bar">
                        <div class="col-lg-6 col-md-12">
                            <input type="text" class="form-control" id="searchProduct"
                                placeholder="search with product name..">
                        </div>
                        <div class="col-lg-6 col-md-12 sort">
                            {{-- <div class="col-lg-4 col-md-6 p-space">
                                <select class="form-control" id="dropdownCategory">
                                    <option value="ALL">ALL Category</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="col-lg-4 col-md-6 p-space">
                                <select class="form-control" id="dropdownOrderBy">
                                    <option value="ALL">ORDER BY</option>
                                    <option value="MEN">Letest</option>
                                    <option value="WOMAN">Price Low - High</option>
                                    <option value="KID">Price High - Low</option>
                                    <option value="OTHER">OTHER</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($produk as $item)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="card-wrapper">
                                    <div class="card-container">
                                        <div class="card-top">
                                            <img class="card-image" src="{{asset('storage/Produk/'.$item->gambar)}}"
                                                alt="" />
                                        </div>
                                        <div class="card-bottom">
                                            <h3>{{ $item->nama }}</h3>
                                            <p>{{ $item->harga }}</p>
                                        </div>
                                        <div class="card-action">
                                            <a href="{{ route('produk.edit', $item->id) }}" class="card-edit">
                                                <i class="mdi mdi-circle-edit-outline">
                                                </i>
                                            </a>
                                            <a href="{{ route('produk.show', $item->id) }}" class="card-preview"><i
                                                    class="mdi mdi-eye-outline"></i>
                                            </a>
                                            <a href="{{ route('produk.destroy', $item->id) }}" class="card-remove"><i
                                                    class="mdi mdi mdi-delete-outline"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <nav aria-label="Page navigation example p-0">
                            <ul class="pagination pagination-seperated pagination-seperated-rounded">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true" class="mdi mdi-chevron-left mr-1"></span> Prev
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>

                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        Next
                                        <span aria-hidden="true" class="mdi mdi-chevron-right ml-1"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
