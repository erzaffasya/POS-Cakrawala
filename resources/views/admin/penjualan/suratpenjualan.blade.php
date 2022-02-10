<x-app-layout>
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-wrapper-2">
                <h1>Invoice</h1>
                <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Invoice
                </p>
            </div>
            <div id="printableArea" class="card invoice-wrapper border-radius border bg-white p-4">
                <div class="d-flex justify-content-between">
                    <h2 class="text-dark text-center w-100 font-weight-medium">FAKTUR</h2><br>

                    <div class="btn-group">
                        <button class="btn btn-sm btn-primary">
                            <i class="mdi mdi-content-save"></i> Save
                        </button>

                        <button class="btn btn-sm btn-primary" onclick="printDiv('printableArea')" value="print a div!">
                            <i class="mdi mdi-printer"></i> Print
                        </button>
                    </div>
                </div>
                <div class="row">
                    <h5>Toko Cakrawala</h5>
                </div>

                <div class="row pt-5">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        {{-- <p class="text-dark mb-2">From</p> --}}

                        <address>
                            <span>Toko Cakrawala</span>
                            <br> Jl. KH Sholeh Iskandar No. 10
                            <br> Kedung Badak, Tanah Serval
                            <br> Bogor 16164 (bekas kantor BPJS Kesehatan/bekas dealer FORD)
                            <br> <span>Telp.:</span> 0251-8665795 / 0816.225.999
                            <br> <span>Fax:</span> 0251-8665795
                        </address>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        {{-- <p class="text-dark mb-2">To</p> --}}

                        <address>
                            <span>NO.</span>
                             {{ $suratpenjualan->no }}
                            <br> <span>Tgl Faktur</span> {{ $suratpenjualan->tgl_faktur }}
                            <br> <span>Jatuh Tempo</span> {{ $suratpenjualan->tgl_jatuhtempo }}
                        </address>
                    </div>
                    <div class="col-xl-4 disp-none"></div>
                    <div class="col-xl-2 col-lg-4 col-sm-6">
                        {{-- <p class="text-dark mb-2">Details</p> --}}

                        <address>
                            <span>KEPADA YTH.</span>
                            <span class="text-dark"></span>
                            <br>{{ $suratpenjualan->nama_penerima }}
                            <br>{{ $suratpenjualan->alamat_penerima }}
                            <br> <span>Telp.</span> {{ $suratpenjualan->nomor_hp }}
                            <br> <span>NPWP</span> {{ $suratpenjualan->npwp }}
                        </address>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table mt-3 table-striped table-responsive table-responsive-large inv-tbl"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Barang</th>
                                <th>Qty</th>
                                <th>Harga Satuan</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($suratpenjualan->produk as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item['nama'] }}</td>
                                    <td>{{ $item['jumlah'] }}</td>
                                    <td>{{ $item['harga'] }}</td>
                                    <td>{{ $item['hargatotal'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class=" justify-content-start inc-total">
                        <div class="col-lg-3 col-xl-3 col-xl-3 ml-sm-auto">
                            <ul class="list-unstyled mt-3">
                                <li class="mid pb-3 text-dark"> Total {{ $suratpenjualan->total }}
                                </li>
                                <br>
                                <li class="mid pb-3 text-dark"> Diskon {{ (int)$suratpenjualan->diskon }}%
                                </li>
                                <br>
                                <li class="mid pb-3 text-dark"> Netto {{ $suratpenjualan->total-((int)$suratpenjualan->total*((int)$suratpenjualan->diskon/100)) }}
                                </li>
                                <br>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class=" justify-content-start inc-total">
                        <div class="col-lg-3 col-xl-3 col-xl-3 ml-sm-auto">
                            <ul class="list-unstyled mt-3">
                                <li class="mid pb-3 text-dark"> Hormat Kami,
                                </li>
                                <br><br><br><br><br><br><br>
                                <li class="mid pb-3 text-dark">
                                    (.............................................)
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
    @push('scripts')
        <script>
            function printDiv(divName) {
                var printContents = document.getElementById(divName).innerHTML;
                var originalContents = document.body.innerHTML;

                document.body.innerHTML = printContents;

                window.print();

                document.body.innerHTML = originalContents;
            }
        </script>
    @endpush
</x-app-layout>
