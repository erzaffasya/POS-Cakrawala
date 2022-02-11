<x-app-layout>
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Tambah Pelanggan</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Pelanggan
            </p>
        </div>
        <div>
            <a href="{{ route('pelanggan.index') }}" class="btn btn-primary"> View All
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Tambah pelanggan</h2>
                </div>

                <div class="card-body">
                    <div class="row ec-vendor-uploads">
                        <form class="row g-3" method="post" action="{{ route('pelanggan.store') }}"
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
                                <div class="ec-vendor-upload-detail row g-3">

                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Nama pelanggan</label>
                                        <input type="text" name="nama" class="form-control slug-title" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nomor HP</label>
                                        <input type="number" class="form-control" name="nomor_hp" id="quantity1">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">NPWP</label>
                                        <input type="number" name="npwp" class="form-control" id="price1">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">KTP</label>
                                        <input type="number" name="ktp" class="form-control" id="price1">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Alamat</label>
                                        <textarea class="form-control" name="alamat" rows="4"></textarea>
                                    </div>
                                    <div class="col-md-12 pt-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
