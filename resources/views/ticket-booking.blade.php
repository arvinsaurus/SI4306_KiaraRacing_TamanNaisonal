@extends('layouts/main')
@section('title','Pesan Tiket')

@section('main-content')

@if (!Auth::check())
    <script>
        $(function() {
            $('#modalSignIn').modal('show');
        });
    </script>
@endif

    <div class="row d-flex align-items-center vh-100">
        <div class="bookingimg position-relative">
            <br>
        </div>

        <div class="col">
            <div class="container p-5 ms-5">
                <h3>Pesan Tiket</h3>
                <p>Pesan tiket dan rasakan petualangan di <br>Taman Nasional Ujung Kulon</p>
                <div class="col-10">
                    <div class="form-group">
                        <form method="POST" action="{{ route('store.booking') }}">
                        @csrf
                        <label for="tanggal_tiket" class="mb-2 fw-bolder">Pilih Tanggal</label>
                        <input type="date" name="tanggal_tiket" class="form-control @error('tanggal_tiket') is-invalid @enderror p-3 bg-dark border-0 text-light" min="{{ date('Y-m-d') }}">
                        @error('tanggal_tiket')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        <p class="fw-bolder">Jumlah Tiket</p>

                        <div class="col mb-4">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-7">
                                    <p class="m-0 fw-bolder">Dewasa (&#62;8 Tahun)</p>
                                    <p class="m-0">Rp. 250.000</p>
                                </div>
                                <div class="col-md-5">
                                    <a class="btn" onclick="kurangDewasa()">
                                        <span class="bg-light rounded-circle p-2">
                                            <i class="fas fa-fw fa-minus "></i>
                                        </span>
                                    </a>
                                    <input type="number" class="count @error('dewasa') is-invalid @enderror text-center w-25 p-2 bg-dark border-0 text-light" name="dewasa" id="dewasa" value="0" min="0" readonly>
                                    @error('dewasa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <a class="btn" onclick="tambahDewasa()">
                                        <span class="bg-light rounded-circle p-2">
                                            <i class="fas fa-fw fa-plus "></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-7">
                                    <p class="m-0 fw-bolder">Anak-anak (&#60;8 Tahun)</p>
                                    <p class="m-0">Rp. 150.000</p>
                                </div>
                                <div class="col-md-5">
                                    <a class="btn" onclick="kurangAnak()">
                                        <span class="bg-light rounded-circle p-2">
                                            <i class="fas fa-fw fa-minus "></i>
                                        </span>
                                    </a>
                                    <input type="number" class="count @error('anak') is-invalid @enderror text-center w-25 p-2 bg-dark border-0 text-light" name="anak" id="anak" value="0" min="0" readonly>
                                    @error('anak')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <a class="btn" onclick="tambahAnak()">
                                        <span class="bg-light rounded-circle p-2">
                                            <i class="fas fa-fw fa-plus "></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr class="w-100">
                        <div class="col mb-3">
                            <div class="row d-flex">
                                <div class="col">
                                    <p>Total</p>
                                </div>
                                <div class="col text-end">
                                    <p class="fw-bolder d-inline">Rp. <p class="fw-bolder @error('total_harga') is-invalid @enderror d-inline" id="total" name="total">0</p></p>
                                    <input type="number" id="total_harga" name="total_harga" value="0" hidden>
                                    @error('total_harga')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary px-4 py-2 w-100" value="Pesan Tiket">
                        </form>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script>
            dewasa = document.getElementById("dewasa");
            anak = document.getElementById("anak");
            total = document.getElementById("total");
            total_harga = document.getElementById("total_harga");
            var noDewasa = 0;
            var noAnak = 0;

            function tambahDewasa(){
                dewasa.value = ++noDewasa;
                total.innerHTML = (dewasa.value * 250000) + (anak.value * 150000);
                total_harga.value = total.innerHTML;
                // total.innerHTML.innerHTML.mask('0.000.000.000.000',{reverse:true});
            }

            function kurangDewasa(){
                dewasa.min = "0";
                dewasa.value = --noDewasa;
                total.innerHTML = (dewasa.value * 250000) + (anak.value * 150000);
                total_harga.value = total.innerHTML;
            }

            function tambahAnak(){
                anak.value = ++noAnak;
                total.innerHTML = (dewasa.value * 250000) + (anak.value * 150000);
                total_harga.value = total.innerHTML;
            }

            function kurangAnak(){
                anak.min = "0";
                anak.value = --noAnak;
                total.innerHTML = (dewasa.value * 250000) + (anak.value * 150000);
                total_harga.value = total.innerHTML;
            }
        </script>
@endsection
