<x-app-layout>
    <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
        <h1>Sub Category</h1>
        <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
            <span><i class="mdi mdi-chevron-right"></i></span>Sub Category
        </p>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-12">
            <div class="ec-cat-list card card-default mb-24px">
                <div class="card-body">
                    <div class="ec-cat-form">
                        <h4>Add Sub Category</h4>
                        <form action="{{ route('subKategori.store') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="text" class="col-12 col-form-label">Name</label>
                                <div class="col-12">
                                    <input id="text" name="nama" class="form-control here slug-title" type="text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="slug" class="col-12 col-form-label">Slug</label>
                                <div class="col-12">
                                    <input id="slug" name="slug" class="form-control here set-slug" type="text">
                                    <small>The “slug” is the URL-friendly version of the name. It is usually all
                                        lowercase and contains only letters, numbers, and hyphens.</small>
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label class="col-12 col-form-label">Sort Description</label>
                                <div class="col-12">
                                    <textarea id="sortdescription" name="sortdescription" cols="40" rows="2"
                                        class="form-control"></textarea>
                                </div>
                            </div> --}}


                            <div class="form-group row">
                                <label class="col-12 col-form-label">Full Description</label>
                                <div class="col-12">
                                    <textarea id="fulldescription" name="detail" cols="40" rows="4"
                                        class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="parent-category" class="col-12 col-form-label">Parent Category</label>
                                <div class="col-12">
                                    <select id="parent-category" name="kategori_id" class="custom-select">
                                        @foreach ($kategori as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <label class="col-12 col-form-label">Product Tags <span>( Type and
                                        make comma to separate tags )</span></label>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="group_tag" name="group_tag" value=""
                                        placeholder="" data-role="tagsinput">
                                </div>
                            </div> --}}

                            <div class="row">
                                <div class="col-12">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-12">
            <div class="ec-cat-list card card-default">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="responsive-data-table" class="table">
                            <thead>
                                <tr>
                                    <th>Thumb</th>
                                    <th>Name</th>
                                    <th>Main Categories</th>
                                    <th>Detail</th>
                                    {{-- <th>Total Sell</th> --}}
                                    <th>Status</th>
                                    <th>Trending</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($subKategori as $item)
                                    <tr>
                                        <td><img class="cat-thumb" src="tadmin/assets/img/category/clothes.png"
                                                alt="product image" /></td>
                                        <td>{{$item->nama}}</td>
                                        <td>
                                            <span class="ec-sub-cat-list">
                                                <span class="ec-sub-cat-tag">{{$item->kategori->nama}}</span>
                                            </span>
                                        </td>
                                        <td>{{$item->detail}}</td>
                                        {{-- <td>2161</td> --}}
                                        <td>ACTIVE</td>
                                        <td><span class="badge badge-success">Top</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-success">Info</button>
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
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
