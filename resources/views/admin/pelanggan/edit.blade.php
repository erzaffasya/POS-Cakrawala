<x-app-layout>
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Edit Pelanggan</h1>
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
                    <h2>Edit pelanggan</h2>
                </div>

                <div class="card-body">
                    <div class="row ec-vendor-uploads">
                        <form class="row g-3" method="post" action="{{ route('pelanggan.update',$pelanggan->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="col-lg-4">
                                <div class="ec-vendor-img-upload">
                                    <div class="ec-vendor-main-img">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type='file' id="imageUpload" name="image"
                                                    class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload"><img
                                                        src="{{ asset('tadmin/assets/img/icons/edit.svg') }}"
                                                        class="svg_img header_svg" alt="edit" /></label>
                                            </div>
                                            <div class="avatar-preview ec-preview">
                                                <div class="imagePreview ec-div-preview">
                                                    <img class="ec-image-preview"
                                                        src="{{ asset('storage/Pelanggan/'.$pelanggan->image) }}"
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
                                        <input type="text" name="nama" class="form-control slug-title" value="{{$pelanggan->nama}}" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nomor HP</label>
                                        <input type="number" min="0" class="form-control" value="{{$pelanggan->nomor_hp}}" name="nomor_hp" id="quantity1">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">NPWP</label>
                                        <input type="number" min="0" name="npwp" value="{{$pelanggan->npwp}}" class="form-control" id="price1">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">KTP</label>
                                        <input type="number" min="0" name="ktp" value="{{$pelanggan->ktp}}" class="form-control" id="price1">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Alamat</label>
                                        <textarea class="form-control" name="alamat" rows="4">{{$pelanggan->alamat}}</textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Status</label>
                                        <select name="status" id="status"
                                                class="form-select">
                                                {{-- <option value="">----PILIH DATA STATUS----</option> --}}
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                    </div>
                                    <div class="col-md-12 pt-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
