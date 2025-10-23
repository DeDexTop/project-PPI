@extends('layout.main')

@section('containers')
<div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="service-title">
                        <h1 class="display-6 mb-4 text-red">All of Our Activities</h1>
                        <p class="fs-5 mb-6">We work to deepen the connections amongs Indonesian students who study in Kastamonu.</p>
                    </div>
                <div class="col-md-12 col-lg-8 col-xl-12">
                    <div class="row g-5">
                        <div class="col-sm-6 col-lg-12 wow fadeIn mb-5" data-wow-delay="0.1s">
                            <div class="service-item h-100">
                                <img src="{{ asset('img/donation-1.jpg') }}" alt="PPI Logo" style="float:right; border-radius:15px;width: 300px; height: auto;">   
                                <h3 class="text-red">Pure Water</h3>
                                <p class="mb-2">We’re creating programs that address urgent needs while fostering
                                    long-term solutions for sustainable change.</p>
                                <a href="#!">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12 wow fadeIn mb-5" data-wow-delay="0.3s">
                            <div class="service-item h-100">
                                <img src="{{ asset('img/donation-2.jpg') }}" alt="PPI Logo" style="float:right; border-radius:15px;width: 300px; height: auto;">   
                                <h3 class="text-red">Health Care</h3>
                                <p class="mb-2">We’re creating programs that address urgent needs while fostering
                                    long-term solutions for sustainable change.</p>
                                <a href="#!">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12 wow fadeIn mb-5" data-wow-delay="0.5s">
                            <div class="service-item h-100">
                                <img src="{{ asset('img/donation-3.jpg') }}" alt="PPI Logo" style="float:right; border-radius:15px;width: 300px; height: auto;">   
                                <h3 class="text-red">Social Care</h3>
                                <p class="mb-2">We’re creating programs that address urgent needs while fostering
                                    long-term solutions for sustainable change.</p>
                                <a href="#!">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12 wow fadeIn mb-5" data-wow-delay="0.1s">
                            <div class="service-item h-100">
                                <img src="{{ asset('img/donation-1.jpg') }}" alt="PPI Logo" style="float:right; border-radius:15px;width: 300px; height: auto;">   
                                <h3 class="text-red">Healthy Food</h3>
                                <p class="mb-2">We’re creating programs that address urgent needs while fostering
                                    long-term solutions for sustainable change.</p>
                                <a href="#!">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12 wow fadeIn mb-5" data-wow-delay="0.3s">
                            <div class="service-item h-100">
                                <img src="{{ asset('img/donation-2.jpg') }}" alt="PPI Logo" style="float:right; border-radius:15px;width: 300px; height: auto;">   
                                <h3 class="text-red">Primary Education</h3>
                                <p class="mb-2">We’re creating programs that address urgent needs while fostering
                                    long-term solutions for sustainable change.</p>
                                <a href="#!">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12 wow fadeIn mb-5" data-wow-delay="0.5s">
                            <div class="service-item h-100">
                                <img src="{{ asset('img/donation-3.jpg') }}" alt="PPI Logo" style="float:right; border-radius:15px;width: 300px; height: auto;">   
                                <h3 class="text-red">Residence Facilities</h3>
                                <p class="mb-2">We’re creating programs that address urgent needs while fostering
                                    long-term solutions for sustainable change.</p>
                                <a href="#!">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection