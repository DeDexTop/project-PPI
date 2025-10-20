@extends('layout.main')

@section('containers')
<div class="container-fluid p-0 wow fadeIn bg-beige" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="carousel-text">
                            <h1 class="display-1 text-uppercase mb-3 text-red">Together for a Better Tomorrow</h1>
                            <p class="fs-5 mb-5">We believe in creating opportunities and empowering communities through
                                education, healthcare, and sustainable development.</p>
                            <div class="d-flex">
                                <a class="btn bg-red py-3 px-4 me-3 rounded-pill text-white" href="#!">Donate Now</a>
                                <a class="btn bg-pink py-3 px-4 rounded-pill text-white" href="#!">Join Us Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="carousel-img">
                            <img class="w-100" src="{{ asset('img/carousel-1.jpg') }}" alt="Image" style="border-radius: 20px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="carousel-text">
                            <h1 class="display-1 text-uppercase mb-3 text-red">Together, We Can End Hunger</h1>
                            <p class="fs-5 mb-5">No one should go to bed hungry. Your support helps us bring smiles,
                                hope, and a brighter future to those in need.</p>
                            <div class="d-flex mt-4">
                                <a class="btn bg-red py-3 px-4 me-3 rounded-pill text-beige" href="#!">Donate Now</a>
                                <a class="btn bg-pink py-3 px-4 rounded-pill text-beige" href="#!">Join Us Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="carousel-img">
                            <img class="w-100" src="{{ asset('img/carousel-2.jpg') }}" alt="Image" style="border-radius: 20px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

