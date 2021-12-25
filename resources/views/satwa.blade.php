@extends('navbar')
@section('main')
    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="row d-flex justify-content-center">
                    <hr>
               </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-6 text-center">
                        <h3 class="w-100 mb-3">Satu Taman Nasional, <br>Berbagai Macam Satwa</h3>
                        <p class="px-3">Kawasan Taman Nasional Ujung Kulon menampung perkembangbiakan berbagai populasi satwa liar. Beberapa jenis satwa endemik penting dan merupakan jenis langka yang sangat perlu dilindungi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="row d-flex justify-content-center">
                    <div class="col-5">
                        <a href="" class="satwa1">
                            <img src="img/Satwa 04.png" alt="" class="w-100"> 
                        </a>
                    </div>
                    <div class="col-7">
                        <div class="row d-flex flex-column justify-content-between h-100">
                            <div class="col">
                                <a href="" class="satwa2">
                                    <img src="img/Satwa 03.png" alt="" class="w-100">
                                </a>
                            </div>
                            <div class="col h-100">
                                <div class="row d-flex justify-content-center h-100">
                                    <div class="col h-100">
                                        <a href="" class="satwa3">
                                            <img src="img/Satwa 02.png" class="w-100 h-100" alt="">
                                        </a>
                                    </div>
                                    <div class="col h-100">
                                        <a href="" class="satwa4">
                                            <img src="img/Satwa 02.png" class="w-100 h-100" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="text-center w-100 my-5">Dan masih banyak lainnya...</h4>
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
                <div class="row d-flex">
                    @foreach($shownews as $news)
                    <a href="{{$news -> url}}">
                    <div class="col-4">
                        <img src="{{ $news -> gambar}}" class="w-100 mb-3" alt="">
                        <h6>{{ $news -> judul }}</h6>
                        <p>{{ $news -> tanggal }}</p>
                    </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /News -->

    <div class="container my-4">
        <div class="col-12">
            <footer>Ⓒ Copyright 2021. Taman Nasional Ujung Kulon</footer>
        </div>
    </div>

@endsection