@extends('navbar')

@section('main')
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
            <button class="btn btn-primary px-4 py-2">
                Pesan Tiket
            </button>
            <button class="btn btn-secondary px-4 py-2">
                Read More
            </button>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row d-flex">
            <div class="col">
                <img class="img-fluid w-100" src="img/Hero-img.png" alt="">
            </div>
        </div>
    </div>
@endsection 
