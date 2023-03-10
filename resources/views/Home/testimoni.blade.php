@extends('layouts.template')
@section('content')
<div class="container">
    <div id="judul" class="mt-5" data-aos="fade-down" data-aos-duration="1000">
        <h1>Testimonial</h1>
    </div>
    <article>
        <p class="fs-5 mt-3" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false" data-aos-delay="100">
            Kami akan menyelesaikan aplikasi kamu sesuai ekspekstasi dan deadline, karena kamu penting.
            <b>Softdevcommunity</b>
            merupakan tempat tercocok untuk kamu pilih sebagai jasa pembuatan aplikasi, dengan harga yang lebih
            miring dan
            cocok untuk kantong pelajar/mahasiswa serta bisnis yang baru dimulai. Kami berusaha menyediakan yang
            terbaik untuk kamu, hanya di <a href="https://softdev.akriliklasercutting.com"
                class="text-decoration-none link-website2">softdevcommunity.com</a>
        </p>
        <p class="fs-5" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false" data-aos-delay="150">
            Berikut adalah kesan - kesan dari klien kita :
        </p>
    </article>
    <div id="carouselExampleDark2" class="carousel carousel-dark slide mt-5 mb-5" data-bs-ride="carousel">
        <div class="carousel-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"
            data-aos-once="false">
            <div class="carousel-item active" data-bs-interval="10000">
                <div class="bg-transparent">
                    <img src="https://res.cloudinary.com/dnmkw2715/image/upload/v1664641179/softdev/Mekar_Laser_Logo_3_pkcv6v.png"
                        class="d-block testimonial-img" alt="..." style="max-height: 4rem; margin:auto">
                    <div class="card-body text-center mt-4">
                        <h5 class="card-title pb-3">Pak Wahyu - CEO CV. Mekar Laser Cutting Digital</h5>
                        <h6><i class="fa-solid fa-quote-left"></i> Saya sangat suka dengan hasilnya. Dari tampilan, cara
                            kerja website dan lain sebagainya itu juga saya suka dan diluar dari ekspetasi saya. Dan
                            terlebih lagi dari kinerja para pembuat aplikasi nya itu sangat semangat, cekatan, jika ada
                            masalah selalu mecari solusi bersama, kerjasama yang baik, dll itu membuat saya tidak kecewa
                            dan menyesal untuk sewa jasa mereka. <i class="fa-solid fa-quote-right"></i></h6>
                    </div>
                </div>
            </div>
            {{-- <div class="carousel-item" data-bs-interval="2000">
                <div class="bg-transparent">
                    <img src="/img/testimonial/testimonial-2.jpg" class="d-block testimonial-img" alt="..."
                        style="max-height: 15rem; margin:auto">
                    <div class="card-body text-center mt-4">
                        <h5 class="card-title">Mei-Mei</h5>
                        <h6><i class="fa-solid fa-quote-left"></i>Some representative placeholder content for the first
                            slide.<i class="fa-solid fa-quote-right"></i></h6>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="carousel-item">
                <div class="bg-transparent">
                    <img src="/img/testimonial/testimonial-3.jpg" class="d-block testimonial-img" alt="..."
                        style="max-height: 15rem; margin:auto">
                    <div class="card-body text-center mt-4">
                        <h5 class="card-title">Susanti</h5>
                        <h6><i class="fa-solid fa-quote-left"></i>Some representative placeholder content for the first
                            slide.<i class="fa-solid fa-quote-right"></i></h6>
                    </div>
                </div>
            </div> --}}
        </div>
        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark2"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon icon-left" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark2" data-bs-slide="next">
            <span class="carousel-control-next-icon icon-next" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> --}}
    </div>
</div>
@endsection()
