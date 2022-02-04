<x-app-layout>
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Edit Testimonial</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Testimonial
            </p>
        </div>
        <div>
            <a href="{{ route('testimonial.index') }}" class="btn btn-primary"> View All
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Add Testimonial</h2>
                </div>

                <div class="card-body">
                    <div class="row ec-vendor-uploads">
                        <form class="row g-3" method="post" action="{{ route('testimonial.update',$testimonial->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="col-lg-4">
                                <div class="ec-vendor-img-upload">
                                    <div class="ec-vendor-main-img">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type='file' id="imageUpload" name="gambar"
                                                    class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload"><img
                                                        src="{{ asset('tadmin/assets/img/icons/edit.svg') }}"
                                                        class="svg_img header_svg" alt="edit" /></label>
                                            </div>
                                            <div class="avatar-preview ec-preview">
                                                <div class="imagePreview ec-div-preview">
                                                    <img class="ec-image-preview"
                                                        src="{{ asset('storage/Testimonial/'.$testimonial->gambar) }}"
                                                        alt="edit" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="ec-vendor-upload-detail row g-3">

                                    <div class="col-md-8">
                                        <label for="inputEmail4" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control slug-title" value="{{$testimonial->nama}}" id="inputEmail4">
                                    </div>
                                    <div class="col-md-8">
                                        <label for="inputEmail4" class="form-label">Perusahaan</label>
                                        <input type="text" name="perusahaan" value="{{$testimonial->perusahaan}}" class="form-control slug-title"
                                            id="inputEmail4">
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi" rows="4">{{$testimonial->deskripsi}}</textarea>
                                    </div>
                                    {{-- <div class="col-md-12">
                                        <label class="form-label">Product Tags <span>( Type and
                                                make comma to separate tags )</span></label>
                                        <input type="text" class="form-control" id="group_tag" name="group_tag"
                                            value="" placeholder="" data-role="tagsinput" />
                                    </div> --}}
                                    <div class="col-md-12 pt-4 ">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</x-app-layout>
