@extends('layouts/main')
@section('title','Riwayat Donasi')

@section('main-content')

<div class="container my-5">
    <div class="row justify-content-center">
        @include('user/sidebar')
        <div class="col-md-9">
            <table class="table text-white border-start border-secondary table-borderless pl-5 table-responsive">
                <thead class="border-bottom border-secondary">
                    <tr>
                        <th class="text-center">Transaction ID</th>
                        <th>Nominal</th>
                        <th>Tanggal Donasi</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($donasi as $d) 
                        <tr>
                            <td class="text-center">{{ $d->id }}</td>
                            <td>{{ $d->nominal}}</td>
                            <td>{{ $d->created_at->format('d/m/Y') }}</td>
                            <td>
                                @if ($d->status == "Pending")
                                    <span class="text-warning">{{ $d->status}}</span>
                                @elseif($d->status == "Completed")
                                    <span class="text-success">{{ $d->status}}</span>
                                @endif
                            </td>
                            <td class="text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalDonasi{{ $d->id }}" class="btn btn-secondary py-2">Lihat Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    {{-- modal detail donasi --}}
    @foreach ($donasi as $d)
    <div class="modal fade" id="modalDonasi{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content bg-black px-5">
                <div class="modal-header border-bottom border-secondary">
                    <img src="{{ asset('img/Logo.png') }}" alt="" height="40em">
                    <p class="fw-bold pt-4">Detail Donasi</p>
                </div>
                <div class="container mb-5 mt-4">
                    <div class="row mb-5">
                        <div class="col-12 text-white-50">
                            Nama
                        </div>
                        <div class="col-12 text-white">
                            {{ Auth::user()->nama }}
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-6">
                            <div class="col-12 text-white-50">
                                ID
                            </div>
                            <div class="col-12 text-white">
                                {{ $d->id }}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="col-12 text-white-50">
                                Status
                            </div>
                            <div class="col-12 text-white">
                                @if ($d->status == "Pending")
                                    <span class="text-warning">{{ $d->status}}</span>
                                @elseif($d->status == "Completed")
                                    <span class="text-success">{{ $d->status}}</span>
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
                                {{ $d->created_at->format('d/m/Y') }}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="col-12 text-white-50">
                                Jumlah Donasi
                            </div>
                            <div class="col-12 text-white">
                                Rp. {{ $d->nominal }}
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <input type="submit" class="btn btn-secondary w-100 py-2" value="Close" data-bs-dismiss="modal" aria-label="Close">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    @endforeach
    {{-- end of modal detail donasi --}}

@endsection