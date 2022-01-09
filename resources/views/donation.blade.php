@extends('layouts/main')
@section('title','Donasi')
    
@section('main-content')

@if (!Auth::check())
    <script>
        $(function() {
            $('#modalSignIn').modal('show');
        });
    </script>
@endif

<div class="row d-flex align-items-center vh-100">
        <div class="donasiimg position-relative">
            <br>
        </div>
        <div class="col">
            <div class="container p-5 ms-5">
                <div class="col w-50">
                    <h3>Donasi</h3>
                    <p>Menaruh harapan kepada satwa liar paling luar biasa di dunia yang mengandalkan kami untuk bertahan hidup — dan berkembang — setiap hari</p>
                </div>
                <div class="col w-50">
                    <div class="form-group">
                        <form action="{{ route('store.donation') }}" method="POST">
                        @csrf
                            <label for="nominal" class="mb-2">Jumlah Donasi</label>
                            <input type="text" name="nominal" class="nominal form-control p-3 bg-dark border-0 text-light mb-3" id="nominal" onkeyup="inputNominal()" placeholder="Rp. 50.000" required>
                            <button class="btn btn-primary px-4 py-2 w-100">Donasi Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function inputNominal(){
            $('.nominal').mask('0.000.000.000.000',{reverse:true});
        }
        
    </script>

        @if(!empty(Session::get('code')) && Session::get('code') == 3)
            <script>
                $(function() {
                    $('#modalDonasi').modal('show');
                });
            </script>
            @foreach ($donation as $d)
            <div class="modal fade" id="modalDonasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content bg-black px-5">
                        <div class="modal-header">
                            <img src="img/Logo.png" alt="" height="40em">
                            <p class="fw-bold pt-4">Detail Donasi</p>
                        </div>
                        <div class="container my-5">
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
                                        {{ $d->status }}
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-6">
                                    <div class="col-12 text-white-50">
                                        Tanggal
                                    </div>
                                    <div class="col-12 text-white">
                                        {{ $d->created_at->formmat('d/m/Y') }}
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
        @endif

@endsection
