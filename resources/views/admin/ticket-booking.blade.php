@extends('layouts/main')
@section('title','Pesanan Tiket')

@section('main-content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <div class="text-end mt-2 me-2">
                <h6 class="text-white">Transaksi</h6><br><br>
                <h6 class="text-dark me-4">Berita</h6>
            </div>
        </div>

        <div class="col-md-9">
            <table class="table text-white table-borderless tabel-border">
                <thead>
                    <tr>
                        <th scope="col">Transaction ID</th>
                        <th scope="col">Jenis Transaksi</th>
                        <th scope="col">Tanggal Pemesanan</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- foreach -->
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                            <!-- Button trigger Lihat Detail -->
                            <button type="button" class="btn-md btn-dark" data-bs-toggle="modal" data-bs-target="#LihatDetail">
                                Lihat Detail
                            </button>
                        </td>
                    </tr>
                    <!-- endforeach -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container my-4 fixed-bottom">
    <div class="col-12">
        <footer>Ⓒ Copyright 2021. Taman Nasional Ujung Kulon</footer>
    </div>
</div>

<!-- Modal Lihat Detail-->
<div class="modal fade" id="LihatDetail" tabindex="-1" aria-labelledby="LabelDetail" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header background">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th><img class="ms-5 mt-3" src="img/Logo.png" alt="Logo" height="40px"></th>
                            <th>
                                <p class="text-white pt-2">Detail Booking</p>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="modal-body background">
                <table class="table table-borderless konfirmasi">
                    <!-- foreach disini! -->
                    <tr>
                        <th>Nama</th>
                    </tr>
                    <tr>
                        <td>Arvin Saurus</td>
                    </tr>

                    <tr>
                        <th>ID</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>ssss</td>
                        <td>sssss</td>
                    </tr>

                    <tr>
                        <th>Tanggal</th>
                        <th>Total Harga</th>
                    </tr>
                    <tr>
                        <td>ssss</td>
                        <td>sssss</td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <!-- Button trigger Konfirmasi -->
                            <button type="button" class="btn btn-primary form-control" data-bs-toggle="modal" data-bs-target="#Konfirmasi">
                                Konfirmasi
                            </button>
                        </td>
                    </tr>
                    <!-- foreach -->
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Lihat Detail-->
<div class="modal fade" id="Konfirmasi" tabindex="-1" aria-labelledby="Konfirmasi" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header background">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th><img class="ms-5 mt-3" src="img/Logo.png" alt="Logo" height="40px"></th>
                            <th>
                                <p class="text-white text-end mt-3">Detail Booking</p>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="modal-body background">
                <table class="table table-borderless konfirmasi">
                    <!-- foreach disini! -->
                    <tr>
                        <th>Nama</th>
                    </tr>
                    <tr>
                        <td>Arvin Saurus</td>
                    </tr>

                    <tr>
                        <th>ID</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>ssss</td>
                        <td>sssss</td>
                    </tr>

                    <tr>
                        <th>Tanggal</th>
                        <th>Total Harga</th>
                    </tr>
                    <tr>
                        <td>ssss</td>
                        <td>sssss</td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            Pembayaran telah selesai dilakukan
                        </td>
                    </tr>
                    <!-- foreach -->
                </table>
            </div>
        </div>
    </div>
</div>

@endsection