@extends('layouts/main')
@section('title','Home')

@section('main-content')
    <div class="row d-flex justify-content-center">
        <div class="col-10 text-center mt-5">
            <h1 class="w-100">Taman Nasional Ujung Kulon</h1>
        </div>
        <div class="col-6 mt-2 text-center">
            <p>Taman Nasional Ujung Kulon merupakan salah satu dari 21 Taman Nasional Model yang ada di Indonesia yang menggabungkan perubahan fungsi beberapa cagar alam serta penunjukan perairan laut di sekitarnya.</p>
        </div>
    </div>
    <div class="row d-flex gap-2 justify-content-center mt-4">
        <div class="col-4 text-center">
            <a href="{{ route('ticket-booking') }}" class="btn btn-primary px-4 py-2">Pesan Tiket</a>
            <a href="{{ route('about') }}" class="btn btn-secondary px-4 py-2">Read More</a>
        </div>
    </div>

    <!-- Hero Image -->
    <div class="heroimg my-5">
        <br>
    </div>
    <!-- Hero Image -->

    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <h5>Taman Nasional Ujung Kulon memiliki beragam jenis satwa liar baik bersifat endemik maupun penting untuk dilindungi. Selain memiliki ciri khas flora dan fauna, terdapat juga sejumlah obyek wisata yang menarik dan eksotis yang sangat layak untuk dikunjungi.</h5>
            </div>
        </div>
    </div>

    <!-- Jumbotron -->
    <div class="container my-5">
        <div class="row d-flex">
            <div class="col-12 mx-0 px-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item w-100 vh-100" src="https://www.youtube.com/embed/rGDEcECBbwo" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->

    <div class="container mb-5">
        <div class="row d-flex">
            <div class="col-12 px-0">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-5">
                        <img src="img/Image2.png" class="w-100"alt="">
                    </div>
                    <div class="col-6">
                        <hr>
                        <h2 class="mb-3">Satu Taman Nasional, <br>Berbagai Macam Satwa</h2>
                        <p class="mb-3 pb-3">Kawasan Taman Nasional Ujung Kulon menampung perkembangbiakan <br> berbagai populasi satwa liar. Beberapa jenis satwa endemik penting dan <br> merupakan jenis langka yang sangat perlu dilindungi.</p>
                        <a href="{{ route('satwa') }}" class="btn btn-secondary px-4 py-2">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row d-flex">
            <div class="col-12 px-0">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-6">
                        <hr>
                        <h2 class="mb-3">Nikmati Keindahan Alam <br> Ujung Kulon</h2>
                        <p class="mb-3 pb-3">Taman Nasional Ujung Kulon menawarkan pesona alam unik yang <br> jarang ditemukan di tempat lainnya. Aneka keunikan dan keindahan <br> alam dapat  ditemukan, mulai dari air terjun, sungai, pantai berpasir <br> putih, taman laut, hingga sumber air panas</p>
                    </div>
                    <div class="col-5">
                        <img src="img/Image3.png" class="w-100"alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row d-flex">
            <div class="col-12 px-0">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-5">
                        <img src="img/Image4.png" class="w-100"alt="">
                      </div>
                    <div class="col-6">
                        <hr>
                        <h2 class="mb-3">Bantuan Anda Sangat Dibutuhkan</h2>
                        <p class="mb-3 pb-3">Untuk merawat hewan dan tumbuhan yang tak terhitung jumlahnya di Taman Nasional, dan menaruh harapan kepada satwa liar paling luar biasa di dunia yang mengandalkan kami untuk bertahan hidup — dan berkembang — setiap hari</p>
                        <a href="{{ route('donation') }}" class="btn btn-secondary px-4 py-2">Donasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- News -->
    <div class="container mb-5">
        <div class="row d-flex">
            <div class="col-12 mb-4">
                <hr>
                <h4>Berita Satwa</h4>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-12">
                <div class="row">
                    @foreach($shownews as $news)
                    <div class="col-4">
                        <a href="{{$news->url}}">
                            <img src="{{ $news->gambar}}" class="w-100 mb-3" alt="">
                            <h6>{{ $news->judul }}</h6>
                            <p>{{ $news->created_at->format('d M Y') }}</p>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /News -->
@endsection 
