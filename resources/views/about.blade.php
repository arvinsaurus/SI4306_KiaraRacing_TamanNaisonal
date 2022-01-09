@extends('layouts/main')
@section('title','Tentang Kami')

@section('main-content')
<!-- Image -->
    <div class="aboutimg mb-5">
        <br>
    </div>
<!-- /Image -->

    <div class="container mb-5">
        <div class="row d-flex">
            <div class="col-12">
                <div class="row d-flex justify-content-center">
                    <div class="col-2">
                        <img src="img/logo.png" class="w-100 mb-2" alt="">
                        <div class="row justify-content-center mb-3">
                            <hr>
                        </div>
                        <h3 class="text-center w-100 mb-4">Sejarah</h3>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-10">
                        <div class="row d-flex justify-content-center">
                            <div class="col-5">
                                <p>Taman Nasional Ujung Kulon merupakan taman nasional pertama yang ditetapkan di Indonesia. Saat masa kolonial Belanda, Ujung Kulon ditetapkan sebagai kawasan Suaka Alam pada tahun 1921. Selain sebagai wilayah konservasi, Taman Nasional Ujung Kulon saat ini menjadi kawasan wisata andalan Banten dengan sejuta destinasi wisata alam yang indah.</p>
                            </div>
                            <div class="col-5">
                                <p>Kawasan Ujung Kulon pertama kali diperkenalkan oleh ahli Botani Jerman F Junghun pada 1846,  saat ia sedang mengumpulkan tumbuhan tropis. Sejak saat itu, kawasan nasional di ujung barat Pulau Jawa dikenal luas oleh para peneliti Eropa. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- Jumbotron -->
    <div class="container mb-5">
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
            <div class="col-12">
                <div class="row d-flex justify-content-center">
                    <div class="col-6">
                        <div class="row justify-content-center">
                            <hr>
                        </div>
                        <h3 class="text-center w-100 mb-5">Visi & Misi</h3>
                        <p>Terwujudnya fungsi Taman Nasional Ujung Kulon sebagai Warisan Alam Dunia dan Kawasan Strategis Nasional yang bermanfaat bagi masyarakat, dengan berlandaskan pada asas pelestarian ekosistemnya.</p>
                        <br>
                        <p>Memantapkan pengelolaan konservasi sumberdaya alam hayati dan ekosistemnya, khususnya mengembangkan populasi dan habitat Badak Jawa serta satwa lainnya yang didukung oleh peran serta masyarakat dan para pihak sebagai kebanggaan masyarakat Banten</p>
                        <br>
                        <p>Menyelenggarakan birokrasi yang ideal serta mengembangkan kemitraan dan pengelolaan secara partisipatif dalam rangka mewujudkan kawasan yang mantap secara legal formal dan diterima semua pihak.</p>
                        <br>
                        <p>Meningkatkan pemanfaatan berkelanjutan keanekaragaman hayati, situs budaya dan sejarah, jasa lingkungan, wisata alam yang menunjang peningkatan perekonomian masyarakat dan pengembangan ilmu pengetahuan, pendidikan dan penelitian.</p>
                        <br>
                        <p>Meningkatkan upaya perlindungan hutan dan penegakan hukum yang didukung masyarakat setempat dalam rangka menekan laju kerusakan hutan serta menjamin fungsi dan daya dukung lingkungan Taman Nasional Ujung Kulon.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="row d-flex">
                    <div class="col-6">
                        <img src="img/aboutimg 03.png" class="w-100" alt="">
                    </div>
                    <div class="col-6">
                        <img src="img/aboutimg 02.png" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <h5>Taman Nasional Ujung Kulon memiliki beragam jenis satwa liar baik bersifat endemik maupun penting untuk dilindungi. Selain memiliki ciri khas flora dan fauna, terdapat juga sejumlah obyek wisata yang menarik dan eksotis yang sangat layak untuk dikunjungi.</h5>
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
                    <div class="col-4">
                        <a href="{{$news->url}}">
                        <div class="col">
                            <img src="{{ $news->gambar}}" class="w-100 mb-3" alt="">
                            <h6>{{ $news->judul }}</h6>
                            <p>{{ $news->created_at->format('d M Y') }}</p>
                        </div>
                        </a>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /News -->
@endsection
