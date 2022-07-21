<x-app-layout>
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Tambah Penjualan</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Penjualan
            </p>
        </div>
        <div>
            <a href="{{ route('penjualan.index') }}" class="btn btn-primary"> View All
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Tambah Penjualan</h2>
                </div>

                <div class="card-body">
                    <div class="row ec-vendor-uploads">
                        <form class="row g-3" method="post" action="{{ route('penjualan.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-4">
                                <div class="ec-vendor-img-upload">
                                    <div class="ec-vendor-main-img">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type='file' id="imageUpload" name="gambar1"
                                                    class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload"><img
                                                        src="{{ asset('tadmin/assets/img/icons/edit.svg') }}"
                                                        class="svg_img header_svg" alt="edit" /></label>
                                            </div>
                                            <div class="avatar-preview ec-preview">
                                                <div class="imagePreview ec-div-preview">
                                                    <img class="ec-image-preview"
                                                        src="{{ asset('tadmin/assets/img/products/vender-upload-preview.jpg') }}"
                                                        alt="edit" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="ec-vendor-upload-detail g-3" id="form-product">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Nama Penerima</label>
                                            <select name="nama" id="pelanggan" onchange="pilihPelanggan()"
                                                class="form-select">
                                                <option value="">----PILIH DATA PELANGGAN----</option>
                                                @foreach ($pelanggan as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Nomor HP</label>
                                            <input type="number" min="0" id="nomor_hp" class="form-control" name="nomor_hp">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">NPWP</label>
                                            <input type="text" id="npwp" name="npwp" class="form-control">
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">Alamat Penerima</label>
                                            <input type="text" id="alamat" name="alamat"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Tanggal Faktur</label>
                                            <input type="date" name="tgl_faktur" class="form-control slug-title"
                                                id="inputEmail4">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Tanggal Jatuh Tempo</label>
                                            <input type="date" name="tgl_jatuhtempo" class="form-control slug-title"
                                                id="inputEmail4">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 mt-3">
                                            <label class="form-label">Produk</label>
                                            <select name="produk[]" id="Categories" class="form-select">
                                                @foreach ($produk as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label class="form-label">Jumlah</label>
                                            <input type="number" min="0" name="jumlah[]" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 pt-4 text-end">
                                    <button type="button" class="btn btn-primary" onclick="addProduct()">Tambah</button>
                                    <button type="button" class="btn btn-danger"
                                        onclick="removeProduct()">Hapus</button>
                                </div>
                            </div>
                            <button class="btn btn-primary mt-2" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            function addProduct() {
                var a = $('#form-product div.row:last').clone(true).addClass("product").insertAfter(
                    '#form-product div.row:last');
            }

            function removeProduct() {
                var a = $('#form-product div.row:last');
                if (a.hasClass("product")) {
                    a.remove();
                }
            }

            function pilihPelanggan() {
                var id = $('#pelanggan').val();
                console.log(id);
                $.ajax({
                    url: '{{ route('pelanggan.get_pelanggan') }}',
                    type: 'get',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        console.log(response)
                        $('#nomor_hp').val(response.nomor_hp);
                        $('#alamat').val(response.alamat);
                        $('#npwp').val(response.npwp);

                    }
                });
            }
        </script>
    @endpush
</x-app-layout>
