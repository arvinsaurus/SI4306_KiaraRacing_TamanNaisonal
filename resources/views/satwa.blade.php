@extends('layouts/main')
@section('title','Satwa')

@section('main-content')
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
                    <div class="col-5 position-relative">
                        <a href="https://id.wikipedia.org/wiki/Badak_jawa">
                            <img src="img/Satwa 04.png" alt="" class="w-100">
                            <div class="overlay text-center position-absolute top-0 h-100 w-100 d-flex flex-column align-items-center">
                                <div class="text my-auto">
                                    <h6 class="m-0">Badak Jawa</h6>
                                    <p>Rhinoceros sondaicus</p>
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-7">
                        <div class="row d-flex flex-column justify-content-between h-100">
                            <div class="col position-relative">
                                <a href="https://id.wikipedia.org/wiki/Anjing_hutan" class="satwa2">
                                    <img src="img/Satwa 03.png" alt="" class="w-100">
                                    <div class="overlay text-center position-absolute top-0 h-100 w-100 d-flex flex-column align-items-center">
                                        <div class="text my-auto">
                                            <h6 class="m-0">Anjing Hutan</h6>
                                            <p>Cuon alpinus javanicus</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col h-100">
                                <div class="row d-flex justify-content-center h-100">
                                    <div class="col h-100 position-relative">
                                        <a href="https://id.wikipedia.org/wiki/Owa_jawa" class="satwa3">
                                            <img src="img/Satwa 02.png" class="w-100 h-100" alt="">
                                            <div class="overlay text-center position-absolute top-0 h-100 w-100 d-flex flex-column align-items-center">
                                                <div class="text my-auto">
                                                    <h6 class="m-0">Owa Jawa</h6>
                                                    <p>Hylobates moloch</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col h-100 position-relative">
                                        <a href="https://id.wikipedia.org/wiki/Surili" class="satwa4">
                                            <img src="img/Satwa 01.png" class="w-100 h-100" alt="">
                                            <div class="overlay text-center position-absolute top-0 h-100 w-100 d-flex flex-column align-items-center">
                                                <div class="text my-auto">
                                                    <h6 class="m-0">Surili</h6>
                                                    <p>Presbytis aigula</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4 class="text-center w-100 my-5">Dan masih banyak lainnya...</h4>

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