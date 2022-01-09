@extends('layouts/main')
@section('title','Data Booking')

@section('main-content')

<div class="container my-5">
    <div class="row justify-content-center">
        @include('admin/sidebar')
        <div class="col-md-9">
            <table class="table text-white border-start border-secondary table-borderless pl-5 table-responsive">
                <thead class="border-bottom border-secondary">
                    <tr>
                        <th class="text-center">Transaction ID</th>
                        <th>Tanggal Tiket</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($booking as $b) 
                        <tr>
                            <td class="text-center">{{ $b->id }}</td>
                            <td>{{ $b->tanggal_tiket->format('d/m/Y') }}</td>
                            <td>{{ $b->created_at->format('d/m/Y') }}</td>
                            <td>
                                @if ($b->status == "Pending")
                                    <span class="text-warning">{{ $b->status}}</span>
                                @elseif($b->status == "Completed")
                                    <span class="text-success">{{ $b->status}}</span>
                                @endif
                            </td>
                            <td class="text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalBooking{{ $b->id }}" class="btn btn-secondary py-2">Lihat Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    {{-- modal detail booking --}}
    @foreach ($booking as $b)
    <div class="modal fade" id="modalBooking{{ $b->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content bg-black px-5">
                <div class="modal-header border-bottom border-secondary">
                    <img src="{{ asset('img/Logo.png') }}" alt="" height="40em">
                    <p class="fw-bold pt-4">Detail Booking</p>
                </div>
                <div class="container mb-5 mt-4">
                    <div class="row mb-5">
                        <div class="col-12 text-white-50">
                            Nama
                        </div>
                        <div class="col-12 text-white">
                            {{ $b->user->nama }}
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-6">
                            <div class="col-12 text-white-50">
                                ID
                            </div>
                            <div class="col-12 text-white">
                                {{ $b->id }}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="col-12 text-white-50">
                                Status
                            </div>
                            <div class="col-12 text-white">
                                @if ($b->status == "Pending")
                                    <span class="text-warning">{{ $b->status}}</span>
                                @elseif($b->status == "Completed")
                                    <span class="text-success">{{ $b->status}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-6">
                            <div class="col-12 text-white-50">
                                Tanggal
                            </div>
                            <div class="col-12 text-white">
                                {{ $b->tanggal_tiket->format('d/m/Y') }}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="col-12 text-white-50">
                                Total Harga
                            </div>
                            <div class="col-12 text-white">
                                Rp. {{ $b->total }}
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <form method="POST" action="{{ route('admin.booking.update', $b->id) }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $b->id }}">
                            @if ($b->status == "Pending")
                                <input type="submit" class="btn btn-primary w-100 py-2 fw-bold" value="Konfirmasi" data-bs-dismiss="modal" aria-label="Close">
                            @elseif($b->status == "Completed")
                                <p>Pembayaran telah dikonfirmasi</p>
                            @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    @endforeach
    {{-- end of modal detail booking --}}

@endsection