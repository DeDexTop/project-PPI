@extends('layout.main')

@section('containers')
<div class="container-fluid py-5 bg-cream">
        <div class="container">
            <h3 class="display-1 text-start text-red pe-3">About Us</h3>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                    <div class="about-img">
                        <img class="img-fluid w-100" src="{{ asset('img/about.jpg') }}" alt="Image" style="border-radius: 15px">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.2s">Join Hands, Change the World</h1>
                    <p class="mb-4 wow fadeIn text-danger" data-wow-delay="0.3s">Every hand extended in kindness brings us closer to
                        a world free from suffering. Be part of a global movement dedicated to building a future where
                        equality and compassion thrive.</p>
                    <div class="row g-4 pt-2">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="h-100">
                                <h3>Our Mission</h3>
                                <p class="text-red">Our mission is to uplift underprivileged communities by providing resources,
                                    education, and tools for growth.</p>
                                <p class="text-dark"><i class="fa fa-check text-red me-2"></i>No one should go to
                                    bed hungry.</p>
                                <p class="text-dark"><i class="fa fa-check text-red me-2"></i>We spread kindness and
                                    support.</p>
                                <p class="text-dark mb-0"><i class="fa fa-check text-red me-2"></i>We can change
                                    someone’s life.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 bg-pink p-4 text-center" style="border-radius: 15px">
                                <p class="fs-5 text-beige">Through your donations, we spread kindness and support to
                                    children and families.</p>
                                <a class="btn bg-red py-2 px-4 rounded-pill text-beige" href="#!" style="margin-top: 15px">Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="rounded overflow-hidden">
                        <div class="row g-0" >
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s" >
                                <div class="text-center bg-red py-5 px-4 h-100" style="border-top-left-radius: 15px; background-color: #ff4c4c">
                                    <i class="fa fa-users fa-3x text-beige mb-3"></i>
                                    <h1 class="display-5 mb-0 text-beige" data-toggle="counter-up">100</h1>
                                    <span class="text-beige">Members</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center bg-beige py-5 px-4 h-100" style="border-top-right-radius: 15px">
                                    <i class="fa fa-award fa-3x text-red mb-3"></i>
                                    <h1 class="display-5 text-red mb-0" data-toggle="counter-up">70</h1>
                                    <span class="text-red">Award Winning</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center bg-beige py-5 px-4 h-100" style="border-bottom-left-radius: 15px">
                                    <i class="fa fa-list-check fa-3x text-red mb-3"></i>
                                    <h1 class="display-5 text-red mb-0" data-toggle="counter-up">3000</h1>
                                    <span class="text-red">Total Projects</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="text-center bg-red py-5 px-4 h-100" style="border-bottom-right-radius: 15px; background-color: #ff4c4c">
                                    <i class="fa fa-comments fa-3x text-beige mb-3"></i>
                                    <h1 class="display-5 mb-0 text-beige" data-toggle="counter-up">7000</h1>
                                    <span class="text-beige">Client's Review</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="section-title bg-white text-start text-red pe-3">Why Us!</p>
                    <h1 class="display-6 mb-4 wow fadeIn text-red" data-wow-delay="0.2s">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-4 wow fadeIn" data-wow-delay="0.3s">We believe in creating opportunities and empowering
                        communities through education, healthcare, and sustainable development. Your support helps us
                        bring smiles, hope, and a brighter future to those in need.</p>
                    <p class="text-dark wow fadeIn" data-wow-delay="0.4s"><i
                            class="fa fa-check text-red me-2"></i>Justo magna erat amet</p>
                    <p class="text-dark wow fadeIn" data-wow-delay="0.5s"><i
                            class="fa fa-check text-red me-2"></i>Aliqu diam amet diam et eos</p>
                    <p class="text-dark wow fadeIn" data-wow-delay="0.6s"><i
                            class="fa fa-check text-red me-2"></i>Clita erat ipsum et lorem et sit</p>
                    <div class="d-flex mt-4 wow fadeIn" data-wow-delay="0.7s">
                        <a class="btn bg-red py-3 px-4 me-3 rounded-pill text-beige" href="#!">Donate Now</a>
                        <a class="btn bg-pink py-3 px-4 rounded-pill text-beige" href="#!">Join Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-red px-3">Our Team</p>
                <h1 class="display-6 mb-4 text-red">Meet Our Dedicated Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item d-flex h-100 p-4">
                        <div class="team-detail pe-4">
                            <img class="img-fluid mb-4" src="{{ asset('img/team-1.jpg') }}" alt="" style="border-radius: 15px">
                            <h3>Boris Johnson</h3>
                            <span>Founder & CEO</span>
                        </div>
                        <div class="team-social bg-beige d-flex flex-column justify-content-center shrink-0 p-4" style="border-radius: 15px">
                            <a class="btn round-btn btn-primary my-2" href="#!" style="cursor: pointer; transform: scale(0.8);"><i class="fab fa-facebook-f text-beige"></i></a>
                            <a class="btn round-btn btn-primary my-2" href="#!" style="cursor: pointer; transform: scale(0.8);"><i class="fab fa-x-twitter text-beige"></i></a>
                            <a class="btn round-btn btn-primary my-2" href="#!" style="cursor: pointer; transform: scale(0.8);"><i class="fab fa-instagram text-beige"></i></a>
                            <a class="btn round-btn btn-primary my-2" href="#!" style="cursor: pointer; transform: scale(0.8);"><i class="fab fa-youtube text-beige"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item d-flex h-100 p-4">
                        <div class="team-detail pe-4">
                            <img class="img-fluid mb-4" src="img/team-2.jpg" alt="" style="border-radius: 15px">
                            <h3>Donald Pakura</h3>
                            <span>Project Manager</span>
                        </div>
                        <div class="team-social bg-beige d-flex flex-column justify-content-center shrink-0 p-4" style="border-radius: 15px">
                            <a class="btn round-btn btn-primary my-2" href="#!" style="cursor: pointer; transform: scale(0.8);"><i class="fab fa-facebook-f text-beige"></i></a>
                            <a class="btn round-btn btn-primary my-2" href="#!" style="cursor: pointer; transform: scale(0.8);"><i class="fab fa-x-twitter text-beige"></i></a>
                            <a class="btn round-btn btn-primary my-2" href="#!" style="cursor: pointer; transform: scale(0.8);"><i class="fab fa-instagram text-beige"></i></a>
                            <a class="btn round-btn btn-primary my-2" href="#!" style="cursor: pointer; transform: scale(0.8);"><i class="fab fa-youtube text-beige"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item d-flex h-100 p-4">
                        <div class="team-detail pe-4">
                            <img class="img-fluid mb-4" src="{{ asset('img/team-3.jpg') }}" alt="" style="border-radius: 15px">
                            <h3>Alexander Bell</h3>
                            <span>Volunteer</span>
                        </div>
                        <div class="team-social bg-beige d-flex flex-column justify-content-center shrink-0 p-4" style="border-radius: 15px">
                            <a class="btn round-btn btn-primary my-2" href="#!" style="cursor: pointer; transform: scale(0.8);"><i class="fab fa-facebook-f text-beige"></i></a>
                            <a class="btn round-btn btn-primary my-2" href="#!" style="cursor: pointer; transform: scale(0.8);"><i class="fab fa-x-twitter text-beige"></i></a>
                            <a class="btn round-btn btn-primary my-2" href="#!" style="cursor: pointer; transform: scale(0.8);"><i class="fab fa-instagram text-beige"></i></a>
                            <a class="btn round-btn btn-primary my-2" href="#!" style="cursor: pointer; transform: scale(0.8);"><i class="fab fa-youtube text-beige"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5 bg-beige">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-12 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="testimonial-title">
                        <h1 class="display-6 mb-4">What People Say About Our Activities.</h1>
                        <p class="fs-5 mb-0">We work to bring smiles, hope, and a brighter future to those in need.</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="{{ asset('img/testimonial-1.jpg') }}" alt="" style="border-radius: 15px">
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-left: 100px">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <div class="mb-2">
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                        </div>
                                        <p class="fs-5">Education is the foundation of change. By funding schools,
                                            scholarships, and training programs, we can help children and adults unlock
                                            their potential for a better future.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="btn-lg-square bg-light text-red shrink-0" style="border-radius:10px"> 
                                                <i class="fa fa-quote-right fa-2x"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5 class="mb-0">Alexander Bell</h5>
                                                <span>CEO, Founder</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="{{ asset('img/testimonial-2.jpg') }}" alt="" style="border-radius: 15px">
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-left: 100px">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <div class="mb-2">
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                        </div>
                                        <p class="fs-5">Love and compassion have the power to heal. Through your
                                            donations and volunteer work, we can spread kindness and support to
                                            children, families, and communities struggling to find stability.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="btn-lg-square bg-light text-red shrink-0" style="border-radius:10px">
                                                <i class="fa fa-quote-right fa-2x"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5 class="mb-0">Boris Johnson</h5>
                                                <span>CEO, Founder</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="{{ asset('img/testimonial-3.jpg') }}" alt="" style="border-radius: 15px">
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-left: 100px">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <div class="mb-2">
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                        </div>
                                        <p class="fs-5">Every hand extended in kindness brings us closer to a world free
                                            from suffering. Be part of a global movement dedicated to building a future
                                            where equality and compassion thrive.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="btn-lg-square bg-light text-red shrink-0" style="border-radius:10px">
                                                <i class="fa fa-quote-right fa-2x"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5 class="mb-0">Donald Pakura</h5>
                                                <span>CEO, Founder</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection