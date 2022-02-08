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
                    <h3 class="text-dark font-weight-medium">SURAT JALAN</h3><br>

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
                        <address class="mt-3">
                            <table>
                                <tr>
                                    <td class="">No.</td>
                                    <td class="pl-3">
                                        {{ $suratjalan->no }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td class="pl-3">
                                        {{ $suratjalan->tanggal }}
                                    </td>
                                </tr>
                            </table>
                        </address>
                    </div>
                    <div class="col-xl-4 disp-none"></div>
                    <div class="col-xl-2 col-lg-4 col-sm-6">
                        <address>
                            <span><b>KEPADA YTH,</b></span> 
                            <br><span>{{ $suratjalan->nama_penerima }}</span>
                            <br> <span>Telp. {{ $suratjalan->nomor_hp }}</span>
                        </address>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-xl-12 col-lg-12 col-sm-12">
                        <p class="">Kami kirimkan barang-barang tersebut dibawah ini dengan kendaraan
                            ..........................................</p>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table mt-3 table-striped table-responsive table-responsive-large inv-tbl"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Qty</th>
                                <th>Nama Barang</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($suratjalan->produk as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item['jumlah'] }}</td>
                                    <td>{{ $item['nama'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
