@extends('layouts/main')
@section('title','Data News')

@section('main-content')

@if(!empty(Session::get('code')) && Session::get('code') == 4)
    <script>
        $(function() {
            $('#modalAddBerita').modal('show');
        });
    </script>
@endif

<div class="container my-5">
    <div class="row justify-content-center">
        @include('admin/sidebar')
        <div class="col-md-9 border-start border-secondary">
            <div class="container pb-0">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="">List Berita</h3>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="#" class="btn btn-primary py-2 px-4 fs-6 mt-2" data-bs-toggle="modal" data-bs-target="#modalAddBerita">Tambah</a>
                    </div>
                </div>
            </div>
            <div class="container my-4">
                @foreach ($news as $n)
                <div class="row my-2">
                    <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ $n->gambar}}" class="mb-3 rounded w-100 float-start" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6>{{ $n->judul }}</h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>{{ $n->created_at->format('d M Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-2 text-end">
                        <a href="{{ route('admin.news.destroy',$n->id) }}" class="btn btn-secondary py-2 px-4 fs-6">Delete</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

    {{-- modal add berita --}}
    <div class="modal fade" id="modalAddBerita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content bg-black px-5">
                <div class="modal-header border-bottom border-secondary">
                    <img src="{{ asset('img/Logo.png') }}" alt="" height="40em">
                    <p class="fw-bold pt-4">Tambah Berita</p>
                </div>
                <form method="POST" action="{{ route('admin.news.store') }}">
                @csrf
                <div class="my-3">
                    <label for="judul" class="col-form-label fw-bold">Judul Berita</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror p-2 bg-dark border-0 text-light" name="judul" id="judul">
                    @error('judul')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="url" class="col-form-label fw-bold">URL</label>
                    <input type="text" class="form-control @error('url') is-invalid @enderror p-2 bg-dark border-0 text-light" name="url" id="url">
                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="gambar" class="col-form-label fw-bold">URL Gambar</label>
                    <input type="text" class="form-control @error('gambar') is-invalid @enderror p-2 bg-dark border-0 text-light" name="gambar" id="gambar">
                    @error('gambar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="my-5">
                    <input type="submit" class="btn btn-primary w-100 fw-bold p-2" value="Post">
                </div>
                </form>
            </div>
        </div>
    </div>   
    {{-- end of modal add berita --}}

@endsection